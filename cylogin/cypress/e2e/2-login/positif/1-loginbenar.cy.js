
describe('Login positif', () => {
  it('Login and Navigate to Dashboard', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
    })
    Cypress.session.clearAllSavedSessions();
    cy.wait(2000)
    cy.login(Cypress.env('username'), Cypress.env('password'));
    cy.url().should('eq','http://localhost/cylogin/beranda/index')
    cy.get('h2').should('be.visible').and('have.text','Selamat datang, Farid Annas')
  })})