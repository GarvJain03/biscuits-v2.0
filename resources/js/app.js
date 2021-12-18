import { InertiaApp } from '@inertiajs/inertia-react'
import React from 'react'
import { render } from 'react-dom'
import '../css/app.css'
import { InertiaProgress } from '@inertiajs/progress'

const el = document.getElementById('app')

InertiaProgress.init({
  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 0,

  // The color of the progress bar.
  color: '#58E302',

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: false,
})

render(
  <InertiaApp
    // Pass props from the server down to the client app
    initialPage={JSON.parse(el.dataset.page)}
    // Dynamically load the required page component
    resolveComponent={(name) => import(`./pages/${name}`).then((module) => module.default)}
    initialComponent={''}
  />,
  el
)
