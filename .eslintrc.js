module.exports = {
  root: true,
  env: {
    browser: true,
    commonjs: true,
    es6: true,
    node: true,
  },
  extends: ['eslint:recommended', 'prettier', 'plugin:prettier/recommended'],
  plugins: ['prettier'],
  parserOptions: { sourceType: 'module' },
  rules: {
    'import/named': 'off',
    'no-console': ['error', { allow: ['warn', 'error'] }],
    'no-extend-native': 'off',
    'import/no-named-as-default': 0,
  },
};
