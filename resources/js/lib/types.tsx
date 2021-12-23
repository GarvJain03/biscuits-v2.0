/* eslint-disable @typescript-eslint/naming-convention */
import { ErrorBag, Errors, Page, PageProps } from '@inertiajs/inertia'

export interface IUser {
  id: number
  username: string
  first_member: string
  second_member: string
  first_member_email: string
  second_member_email: string
  first_member_grade: number
  second_member_grade: number
  category: string
  is_admin: boolean
  created_at: string
  updated_at: string
}

export interface IPageProps extends Page<PageProps> {
  props: {
    errors: Errors & ErrorBag
    authenticated: boolean
    user: IUser
  }
}
