import React from 'react';

const ButtonComponent = () => {

  const helloReact = () => {
    alert('Hello React!')
  }

  return (
    <div>
      <button onClick={helloReact} style={{backgroundColor:"blue", color:"white", padding:"1rem", border:"none", borderRadius:"5px"}}>Click me!</button>
    </div>
  );
};

export default ButtonComponent;