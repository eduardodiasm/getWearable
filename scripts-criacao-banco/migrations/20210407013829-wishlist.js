'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
     await queryInterface.createTable('wishlist', {
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
        field: 'id',
      },

      product_id: {
        type: Sequelize.INTEGER,
        allowNull: false,
        references: {
          key:'id',
          model:'product'
        },
        onUpdate:'CASCADE',
        onDelete:'CASCADE',
      },

      user_id: {
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
    await queryInterface.dropTable('wishlist');
  }
};
