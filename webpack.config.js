const webpack = require('webpack');
const path = require('path');
const glob = require('glob');
const process = require('process');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const PurifyCSSPlugin = require('purifycss-webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');

const inProduction = process.env.NODE_ENV === 'production';
const inDevelopment = process.env.NODE_ENV === 'development';

let cleanOptions = {
    root: __dirname,
    verbose: false,
    dry: false
};

let srcDir = 'public/';
let assetsDir = srcDir + 'assets';
let mainExt = srcDir + '.php';
let pathsToClean = [assetsDir];

module.exports = {
    entry: {
        main: './assets/js/main.js'
    },
    output: {
        path: path.resolve(__dirname, assetsDir),
        filename: '[name].[chunkhash].js'
    },
    resolve: {
        alias: {
            'vue$': 'vue/assets/vue.esm.js'
        }
    },
    devtool: "source-map", // any "source-map"-like devtool is possible
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            },
            {
                test: /\.s[ac]ss$/,
                loader: ExtractTextPlugin.extract({
                    use: [
                        {
                            loader: 'css-loader',
                            options: {
                                sourceMap: true
                            }
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true
                            }
                        }],
                    fallback: "style-loader"
                })
            },
            {
                test: /\.(eot|ttf|woff|woff2)$/,
                use: 'file-loader'
            },
            {
                test: /\.(png|jpe?g|gif|svg)$/,
                loaders: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'images/[name].[hash].[ext]'
                        }
                    },
                    'img-loader'
                ],
            }
        ]
    },
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions),
        new ExtractTextPlugin("[name].[contenthash].css"),
        new webpack.LoaderOptionsPlugin({
            minimize: inProduction
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
        }),
        function () {
            this.plugin('done', stats => {
                require('fs').writeFileSync(
                    path.join(__dirname, assetsDir + '/manifest.json'),
                    JSON.stringify(stats.toJson().assetsByChunkName)
                )
            })
        }
    ]
};

if (inProduction) {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin()
    );
    module.exports.plugins.push(
        new PurifyCSSPlugin({
            paths: glob.sync(path.join(__dirname, './' + srcDir + '**/*' + mainExt)),
            minimize: inProduction,
            purifyOptions: {
                whitelist: ['*box*', '*list*', '*input*', '*textarea*', '*select*', '*slide*']
            }
        })
    )
}
