describe('regist positif', () => {
  it('regist berhasil', () => {
    cy.visit(Cypress.env('baseUrl'));  
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
    })
    cy.get('a[href="http://localhost/cylogin/register"]').click()
    cy.get('.card-title.text-center.mb-4').should('be.visible').and('have.text', 'Register');
    cy.get('input[name="nama_depan"]').type('Testing')
    cy.get('input[name="nama_belakang"]').type('aplikasi')
    cy.get('input[name="email"]').type('tes@gmail.com')
    cy.get('input[name="password"]').type('123')
    cy.get('input[name="konfirmasi_password"]').type('123')
    cy.get('button[type="submit"]').click();
    cy.wait(3000)
  })})