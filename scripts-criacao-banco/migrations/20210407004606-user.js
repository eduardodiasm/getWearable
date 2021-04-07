'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('user', { 
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
        field: 'id',
      },

      name: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'name',
      },
      
      email: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'email',
      },
      password: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'password',
      },
      photo: {
        type: Sequelize.STRING,
        allowNull: false,
        field: 'photo',
      },
    });
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('user');
  }
};
