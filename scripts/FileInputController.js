class FileInputController extends Stimulus.Controller {
  static get targets() {
    return ["value", "input"];
  }

  display(evt) {
    const fileName = evt.target.value.split("\\").pop();

    if (this.valueTarget.nodeName == "INPUT") {
      this.valueTarget.placeholder = fileName;
    } else {
      this.valueTarget.innerHTML = fileName;
    }
  }
}

const application = Stimulus.Application.start();
application.register("file-input", FileInputController);
