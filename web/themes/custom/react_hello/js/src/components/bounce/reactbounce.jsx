import React, { Component } from "react";
import { bounce } from "react-animations";
import styled, { keyframes } from "styled-components";

const Bounce = styled.div`
  animation: 2s ${keyframes` ${bounce}`} infinite;
`;

export default class Reactbounce extends Component {
  render() {
    return (
      <Bounce>
        <h1>Drupal loves React!!</h1>
      </Bounce>
    );
  }
}
