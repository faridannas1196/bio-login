describe('regist negatif', () => {
  it('pass tidak sama', () => {
    cy.visit(Cypress.env('baseUrl'));  
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
    })
    cy.get('a[href="http://localhost/cylogin/register"]').click()
    cy.get('input[name="nama_depan"]').type('adit')
    cy.get('input[name="nama_belakang"]').type('subagja')
    cy.get('input[name="email"]').type('adit@gmail.com')
    cy.get('input[name="password"]').type('123')
    cy.get('input[name="konfirmasi_password"]').type('1234')
    cy.get('button[type="submit"]').click();
    cy.get('.alert-danger').should('be.visible')
    cy.wait(3000)
  })})