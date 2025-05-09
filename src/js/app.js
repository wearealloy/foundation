const App = async () => {
  await import("./components");
};

App()
  .then(() => console.log("App loaded"))
  .catch((error) => console.log(error));
