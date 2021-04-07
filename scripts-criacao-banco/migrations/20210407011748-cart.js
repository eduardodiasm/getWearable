'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
     await queryInterface.createTable('cart', {
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
        field: 'id',
      },

      user_id:{
        type: Sequelize.INTEGER,
        allowNull: false,
        references: {
          key:'id',
          model:'user'
        },
        onUpdate:'CASCADE',
        onDelete:'CASCADE',
      }

     });
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('cart');
  }
};
