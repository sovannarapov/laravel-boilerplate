module.exports = {
  extends: ['@commitlint/config-conventional'],
  rules: {
    'type-enum': [
      2,
      'always',
      ['build', 'chore', 'ci', 'docs', 'feat', 'fix', 'hotfix', 'perf', 'refactor', 'revert', 'style', 'test'],
    ],
  },
};
