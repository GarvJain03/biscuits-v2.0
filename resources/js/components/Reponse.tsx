import React, { useState } from 'react'
import { Inertia } from '@inertiajs/inertia'

const Reponse = () => {
  const [values, setValues] = useState({
    answer: '',
  })

  const handleChange = (e: React.ChangeEvent<HTMLTextAreaElement>) => {
    const { name, value } = e.target
    setValues({ ...values, [name]: value })
  }

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault()
    Inertia.post('/response', values)
  }

  return (
    <form className="flex flex-col px-8" onSubmit={handleSubmit}>
      <textarea
        name="answer"
        value={values.answer}
        onChange={handleChange}
        className="bg-cool-gray rounded-lg border-gray-300 mb-4 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
      />
      <button className="text-dark-bg font-bold bg-text-green border-0 py-2 px-8 focus:outline-none hover:bg-heading-green rounded text-lg">
        Submit
      </button>
    </form>
  )
}

export default Reponse
