describe('Login negatif', () => {
  it('Password salah', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
    })
    Cypress.session.clearAllSavedSessions();
    cy.wait(2000)
    cy.login(Cypress.env('username'), '1213');
     cy.get('.alert-danger').should('be.visible')
  })})