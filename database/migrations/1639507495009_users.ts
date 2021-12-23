import BaseSchema from '@ioc:Adonis/Lucid/Schema'

export default class UsersSchema extends BaseSchema {
  protected tableName = 'users'

  public async up() {
    this.schema.createTable(this.tableName, (table) => {
      table.increments('id').primary()

      table.string('username', 255).notNullable()

      table.string('first_member', 255).notNullable()
      table.string('second_member', 255).notNullable()

      table.string('first_member_email', 255).notNullable()
      table.string('second_member_email', 255).notNullable()

      table.string('password', 180).notNullable()

      table.integer('first_member_grade', 2).notNullable()
      table.integer('second_member_grade', 2).notNullable()

      table.string('category', 255).notNullable()

      table.boolean('is_admin').notNullable().defaultTo(false)

      table.integer('question_on').notNullable().defaultTo(1).unsigned()
      table.string('remember_me_token').nullable()

      /**
       * Uses timestampz for PostgreSQL and DATETIME2 for MSSQL
       */
      table.timestamp('created_at', { useTz: true }).notNullable()
      table.timestamp('updated_at', { useTz: true }).notNullable()
    })
  }

  public async down() {
    this.schema.dropTable(this.tableName)
  }
}
