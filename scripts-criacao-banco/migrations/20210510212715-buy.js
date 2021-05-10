'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
     await queryInterface.createTable('buy', { 
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
        field: 'id',
      },
      address: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'address',
      },
      phone: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'phone',
      },
      city: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'city',
      },
      state: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'state',
      },
      method_payment: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'method_payment',
      },
      price: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'price',
      }
     });
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('buy');
  }
};
