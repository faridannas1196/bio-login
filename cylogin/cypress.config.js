module.exports = ({
  projectId: 'dw918t',
  video: true,
  videoCompresssion: 32,
  videoUploadOnPasses: true,
  e2e: {
    specPattern: [
      "cypress/e2e/**/*.cy.js",
    ],
    // experimentalSessionAndOrigin: true,
    testIsolation: false,
    cacheAcrossSpecs: true,
    watchForFileChanges: false,
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
    pageLoadTimeout: 120000,
  },
}); 