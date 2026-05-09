import React from 'react'
import ReactDOM from 'react-dom/client'
import './styles/main.css'

function App() {
  return (
    <div className="page">
      <header className="header">
        <div className="header__logo">SNIKER DOPE</div>
      </header>

      <main className="hero">
        <h1 className="hero__title">PREMIUM SNEAKER EXPERIENCE</h1>
        <p className="hero__text">Minimal futuristic sneaker store.</p>
        <button className="hero__button">SHOP NOW</button>
      </main>
    </div>
  )
}

ReactDOM.createRoot(document.getElementById('root')).render(<App />)
