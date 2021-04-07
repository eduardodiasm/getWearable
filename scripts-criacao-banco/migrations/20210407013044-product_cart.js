'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
     await queryInterface.createTable('product_cart', {
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
        field: 'id',
      },

      product_id:{
        type: Sequelize.INTEGER,
        allowNull: false,
        references: {
          key:'id',
          model:'product'
        },
        onUpdate:'CASCADE',
        onDelete:'CASCADE',
      },

      cart_id:{
        type: Sequelize.INTEGER,
        allowNull: false,
        references: {
          key:'id',
          model:'cart'
        },
        onUpdate:'CASCADE',
        onDelete:'CASCADE',
      },

      quantity: {
        type: Sequelize.INTEGER,
        default: 1,
        allowNull: false
      },
    
      value: {
        type: Sequelize.DECIMAL,
        allowNull: false
      }

     });
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('product_cart');
  }
};
