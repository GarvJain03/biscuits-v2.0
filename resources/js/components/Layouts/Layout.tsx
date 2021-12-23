/* eslint-disable @typescript-eslint/naming-convention */
import React from 'react'
import Header from '../Header'

interface ILayoutProps {
  children: React.ReactNode
}

interface Link {
  links: {
    name: string
    url: string
  }[]
}

const Layout: React.FC<ILayoutProps> = ({ children }: ILayoutProps) => {
  const links: Link['links'] = [
    {
      name: 'Home',
      url: '/',
    },
    {
      name: 'About',
      url: '/about',
    },
  ]

  return (
    <div className="bg-dark-bg">
      <Header links={links} />
      <main className="container mx-auto text-heading-green">{children}</main>
    </div>
  )
}

export default Layout
