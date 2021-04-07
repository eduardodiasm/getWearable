'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('product',  { 
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
      },

      name: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      
      principal_photo: {
        type: Sequelize.STRING
      },

      price: {
        type: Sequelize.DECIMAL,
        allowNull: false
      },

      quantity: {
        type: Sequelize.INTEGER
      },

      description: {
        type: Sequelize.STRING
      }
      
    });
  },

  down: async (queryInterface, Sequelize) => {
     await queryInterface.dropTable('product');
  }
};
