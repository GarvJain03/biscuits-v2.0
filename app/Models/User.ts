import { DateTime } from 'luxon'
import Hash from '@ioc:Adonis/Core/Hash'
import { column, beforeSave, BaseModel, hasOne, HasOne } from '@ioc:Adonis/Lucid/Orm'
import Response from 'App/Models/Response'

export default class User extends BaseModel {
  @column({ isPrimary: true })
  public id: number

  @column()
  public username: string

  @column()
  public first_member: string

  @column()
  public second_member: string

  @column()
  public first_member_email: string

  @column()
  public second_member_email: string

  @column({ serializeAs: null })
  public password: string

  @column()
  public first_member_grade: number

  @column()
  public second_member_grade: number

  @column()
  public category: string

  @column()
  public question_on: number

  @column()
  public is_admin: boolean

  @hasOne(() => Response, {
    foreignKey: 'user_id',
  })
  public responses: HasOne<typeof Response>

  @column()
  public rememberMeToken?: string

  @column.dateTime({ autoCreate: true })
  public createdAt: DateTime

  @column.dateTime({ autoCreate: true, autoUpdate: true })
  public updatedAt: DateTime

  @beforeSave()
  public static async hashPassword(user: User) {
    if (user.$dirty.password) {
      user.password = await Hash.make(user.password)
    }
  }
}
