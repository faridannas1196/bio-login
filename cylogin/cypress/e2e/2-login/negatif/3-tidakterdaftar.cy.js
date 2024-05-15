describe('Login negatif', () => {
  it('akun tidak terdaftar', () => {

    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
    })
    Cypress.session.clearAllSavedSessions();
    cy.login('annas@gmail.com', '123');
    cy.get('.alert-danger').should('be.visible')
  })})