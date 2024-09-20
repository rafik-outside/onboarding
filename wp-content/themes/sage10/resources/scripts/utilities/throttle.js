/**
 * Throttles the function.
 *
 * @param cb - The callback function.
 * @param delay - The delay for throttling. 500ms set to default.
 *
 * @example
 *
 * Syntax Example:
 * import and use the throttle function as callback function for throttling as:
 *
 * const throttledScroll = throttle(yourFunction, 100);
 * addEventListener('scroll', throttledScroll);
 *
 * Here yourFunction is custom function in which you compute your data.
 */

export function throttle(cb, delay = 500) {
  let shouldWait = false;
  let waitingArgs;
  const timeoutFunc = () => {
    if (waitingArgs == null) {
      shouldWait = false;
    } else {
      cb(...waitingArgs);
      waitingArgs = null;
      setTimeout(timeoutFunc, delay);
    }
  };

  return (...args) => {
    if (shouldWait) {
      waitingArgs = args;
      return;
    }

    cb(...args);
    shouldWait = true;
    setTimeout(timeoutFunc, delay);
  };
}
