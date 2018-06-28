import { viewport_width } from './globals';

export const fitText = () => {
  let elements;

  function calcSize(item) {
    let parentWidth,
        percentage,
        size;

    item.style.display  = 'inline-block';
    item.style.fontSize = '1px';
    parentWidth         = item.parentNode.offsetWidth;
    percentage          = parentWidth / item.offsetWidth;
    size                = 0;

    while (item.offsetWidth < parentWidth) {
      size += 1;
      item.style.fontSize = size + 'px';
    }

    item.style.fontSize = size - 1 + 'px';
  }

  elements = document.querySelectorAll('.js-fit-text');

  if (viewport_width <= 460) {
    Array.prototype.forEach.call(elements, calcSize);
  }
};
