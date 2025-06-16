function initialize() {
  const message = "Debugging JavaScript is working.";
  const result = formatMessage(message);

  console.log("Formatted message:", result);
}

function formatMessage(text) {
  return `${text}`;
}

initialize();