import React from 'react'
import ReactDOM from 'react-dom'
import faker from 'faker'

class App extends React.Component {
  render() {
    return (
      <div>
        Andriy Maleyev
      </div>
    )
  }
}

ReactDOM.render(<App />, document.querySelector('#root'))
