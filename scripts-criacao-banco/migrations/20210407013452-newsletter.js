'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {     
    await queryInterface.createTable('newsletter_email', {
      email: {
        type: Sequelize.STRING,
        allowNull: false,
      },
    });
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('newsletter_email');
  }
};
