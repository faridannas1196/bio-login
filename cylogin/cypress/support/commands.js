Cypress.Commands.add('login', (username, password) => {
  cy.session('login', () => {
    cy.visit(Cypress.env('baseUrl'));  
    cy.wait(3000);
    cy.get('#email').type(username);
    cy.get('#password').type(password);
    cy.intercept('/login').as('submitLogin');
    cy.get('#loginBtn').click();
    cy.wait(3000);
  }) 
    cacheAcrossSpecs: true
  });

Cypress.Commands.add('generate16DigitNumber', () => {
  const randomNumber = Math.floor(Math.random() * 9000000000000000) + 1000000000000000;
  return randomNumber.toString();
});

Cypress.Commands.add('generateRandomWord', (length) => {
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  let result = '';
  for (let i = 0; i < length; i++) {
    const randomIndex = Math.floor(Math.random() * characters.length);
    result += characters.charAt(randomIndex);
  }
  return result;
});

Cypress.Commands.add('pickDateRange', () => {
  cy.get('#reportrange').click();
  cy.get('.ranges').find('ul > li').eq(6).click();
  cy.get('.monthselect').eq(0).select(10);
  cy.get('.yearselect').eq(0).select('2022');
  cy.get('.table-condensed').find('tbody tr').first().then(row => {
    cy.wrap(row).find('td').eq(2).click();
  });
  cy.get('.table-condensed').find('tbody tr').eq(4).then(row => {
    cy.wrap(row).find('td').eq(3).click();
  });
  cy.get('.card-body .row').find('button').eq(0).click();
  cy.wait(2000);
});