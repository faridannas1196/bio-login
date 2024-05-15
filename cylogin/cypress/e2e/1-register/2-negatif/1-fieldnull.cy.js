describe('regist negatif', () => {
  it('salah satu field dikosongkan', () => {
    cy.visit(Cypress.env('baseUrl'));  
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
    })
    cy.get('a[href="http://localhost/cylogin/register"]').click()
    cy.get('input[name="nama_depan"]').type('tes')
    cy.get('input[name="nama_belakang"]').type('coba')
    cy.get('input[name="password"]').type('123')
    cy.get('input[name="konfirmasi_password"]').type('123')
    cy.get('button[type="submit"]').click();
    cy.wait(3000)
  })})