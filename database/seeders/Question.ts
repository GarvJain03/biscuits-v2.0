import BaseSeeder from '@ioc:Adonis/Lucid/Seeder'
import { QuestionFactory } from 'Database/factories'

export default class QuestionSeeder extends BaseSeeder {
  public async run() {
    // Write your database queries inside the run method

    await QuestionFactory.createMany(30)
  }
}
