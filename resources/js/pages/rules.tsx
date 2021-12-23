import React from 'react'
import Authenticated from '../components/Layouts/Authenticated'
import useTitle from '../lib/hooks/use-title'

const Rules = () => {
  useTitle('Rules')
  return (
    <Authenticated>
      <h1>Rules</h1>
    </Authenticated>
  )
}

export default Rules
