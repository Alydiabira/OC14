// package metadata file for Meteor.js

/* eslint-env meteor */

Package.describe({
  name: 'twbs:bootstrap', // https://atmospherejs.com/twbs/bootstrap
  summary: 'The most popular front-end framework for developing responsive, mobile first projects on the web.',
<<<<<<< HEAD
  version: '5.3.3',
=======
  version: '5.3.8',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
  git: 'https://github.com/twbs/bootstrap.git'
})

Package.onUse(api => {
  api.versionsFrom('METEOR@1.0')
  api.addFiles([
    'dist/css/bootstrap.css',
    'dist/js/bootstrap.js'
  ], 'client')
})
