import react from 'react';
import reactDom from 'react-dom';
import babel from 'rollup-plugin-babel';
import nodeResolve from 'rollup-plugin-node-resolve';
import commonjs from 'rollup-plugin-commonjs';
import replace from 'rollup-plugin-replace';
import livereload from 'rollup-plugin-livereload';

export default {
    input: 'src/app.jsx',
    output: [
        {
            file: 'dist/bundle.js',
            sourcemap: 'inline',
        },
    ],
    plugins: [
        nodeResolve({
            browser: true,
        }),
        commonjs({
            include: [
                'node_modules/**',
            ],
            namedExports: {
                'react': Object.keys(react),
                'react-dom': Object.keys(reactDom)
            }
        }),
        babel({
            presets: ['@babel/preset-react'],
        }),
        replace({
            'process.env.NODE_ENV': JSON.stringify('production'),
        }),
        livereload()
    ],
};
