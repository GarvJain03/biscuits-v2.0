import React from 'react'
import Header from './Header'

const Layout = ({ children }) => {
  return (
    <div className="bg-dark-bg">
      <Header />
      <main className="container mx-auto text-heading-green">{children}</main>
    </div>
  )
}

export default Layout
