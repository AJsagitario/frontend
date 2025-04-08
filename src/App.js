import React, { useState, useEffect } from 'react';

function App() {
  const [buses, setBuses] = useState([]);

  useEffect(() => {
    fetch('http://localhost:8081/bus')
      .then(response => response.json())
      .then(data => setBuses(data))
      .catch(error => console.error('Error al obtener los buses:', error));
  }, []);

  return (
    <div className="App">
      <h1>Lista de Buses</h1>
      <table border="1" cellPadding="10" style={{ margin: 'auto' }}>
        <thead>
          <tr>
            <th>ID</th>
            <th>Número de Bus</th>
            <th>Placa</th>
            <th>Fecha de Creación</th>
            <th>Características</th>
            <th>Marca</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          {buses.map((bus) => (
            <tr key={bus.id}>
              <td>{bus.id}</td>
              <td>{bus.numeroBus}</td>
              <td>{bus.placa}</td>
              <td>{bus.fechaCreacion}</td>
              <td>{bus.caracteristicas}</td>
              <td>{bus.marca?.nombre}</td>
              <td>{bus.activo ? 'Activo' : 'Inactivo'}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default App;

