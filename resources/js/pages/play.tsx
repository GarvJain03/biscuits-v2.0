import React from 'react'
import Authenticated from '../components/Layouts/Authenticated'
import useTitle from '../lib/hooks/use-title'
import Response from '../components/Reponse'

interface Props {
  question: {
    id: number
    description: string
  }[]
}

const Play: React.FC<Props> = ({ question }: Props) => {
  useTitle('Play')

  return (
    <Authenticated>
      <section className="text-gray-600 body-font">
        <div className="container mx-auto flex px-5 py-12 items-center justify-center flex-col">
          <div className="text-center bg-gray-light py-12 px-8 rounded-lg lg:w-2/3 w-full">
            {question.map((q) => (
              <div>
                <h1 className="title-font sm:text-6xl text-6xl mb-4 font-bold text-heading-green">
                  Level {q.id}
                </h1>
                <p className="mb-8 leading-relaxed text-text-green text-xl">{q.description}</p>
              </div>
            ))}
            <Response />
          </div>
        </div>
      </section>
    </Authenticated>
  )
}

export default Play
