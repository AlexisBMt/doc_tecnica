import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Index (props) {

  return (
    <>
      <Head title="Index" />
      <h1 className="m-5 text-gray-500" >Hello World!!!</h1>
      <p className="m-5">Hola a todos</p>
      <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Hello</button>
    </>
  )
}