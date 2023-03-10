
<html>
<style>
.topnav {
  background-color: #ffffb3; /gold/
   width: 150px;
  height: 30px;
  padding: 15px;
 box-shadow: 10px 10px 5px #ffffcc;
}

.topnav  a {
  display: block;
  float: right;
  color: #250033; /*نهدي*/
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size:18px;
}
.topnav  a:hover:not(.active) {background-color: white;}
.mySlides {display: none; margin-right:200px; margin-top:15px}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  text-align:center;
}


.topnav  a:hover:not(.active) {background-color: white;}
.mySlides {display: none; margin-right:200px; margin-top: 10px}
img {vertical-align: middle;}

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  --darkBlue: #010a43;
  --lightGreen: #a7e9af;
  --whiteClr: #fff;
  --lightBlue: rgba(0, 64, 128, 0.2);
  --intenseBlue: #46b3e6;
 
}

html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}

body {
  min-height: 100vh;
  margin: 0;
  padding: 1rem;
  font-family: "Roboto", sans-serif;
  color: var(--darkBlue);
  background-color: #fdfdfd;
}

.container {
  min-height: 100vh;
  display: grid;
  grid-gap: 40px;
  align-content: center;
  margin-right:500px;
  margin-left:50px;
  align-content:center;
}

.main {
  display: block;
  align-self: start;
}

button,
input,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;

}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
[type="button"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

.github-corner {
  background-color: transparent;
  text-decoration: none;
}
.github-corner svg {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  fill: rgba(92, 42, 157, 0.8);
  transition: fill 0.25s ease-in-out;
  z-index: 1;
}

.github-corner svg:hover {
  fill: #5c2a9d;
}

.header {
  align-self: center;
  text-align: center;
}

.header__title {
  margin: 0;
  font-size: 2em;
  line-height: 1.2;
}

.header__description {
  margin-bottom: 3rem;
  font-size: 1em;
  line-height: 1.4;
}

main.submission {
  align-self: center;
  justify-self: center;
}

h2.submission {
  text-align: center;
}

.illustration {
  width: 100%;
  border-style: none;
}

label {
  cursor: pointer;
}

@media (min-width: 700px) {
  .container {
    grid-template-columns: 1fr 1fr;
    max-width: 1400px;
    margin: 0 auto;
    align-items: center;
  }

  .header,
  .main {
    grid-row: 1;
  }
}

.progressbar {
  margin: 2rem 1rem 2rem;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  counter-reset: list;
  height: 20px;
}

.progressbar__step {
  position: relative;
  width: 20%;
  line-height: 1.4;
}

.progressbar__step.active:before {
  background-color: var(--lightGreen);
}

.progressbar__step:nth-child(2)::after,
.progressbar__step:nth-child(3)::after,
.progressbar__step:nth-child(4)::after,
.progressbar__step:nth-child(5)::after {
  content: "";
  position: absolute;
  left: -100%;
  top: 12px;
  z-index: -1;
  width: 100%;
  height: 2px;
  background-color: var(--lightBlue);
}

.progressbar__step.active:nth-child(2)::after,
.progressbar__step.active:nth-child(3)::after,
.progressbar__step.active:nth-child(4)::after,
.progressbar__step.active:nth-child(5)::after {
  background-color: var(--lightGreen);
}

.progressbar__step:before {
  counter-increment: list;
  content: counter(list);
  position: absolute;
  display: block;
  width: 25px;
  height: 25px;
  font-size: 0.85rem;
  background-color: var(--whiteClr);
  text-align: center;
  border: 3px solid var(--lightBlue);
  border-radius: 100%;
}

.survey {
  display: flex;
  flex-direction: column;
}

.survey__panel {
  display: none;
  padding: 1rem;
}

.survey__panel--current {
  display: block;
}

.survey__panel__question {
  margin: 0 0 1.5rem;
  font-size: 1.35em;
  line-height: 1.2;
  align-content:center;
}

.survey__panel strong {
  --darkGrey: #4b4b4b;
  display: block;
  margin-bottom: 0.3rem;
  font-weight: normal;
  font-size: 0.95rem;
  color: var(--darkGrey);
}

.error-message {
  --errClr: #b80d57;
  height: 14px;
  margin-bottom: 0;
  margin-top: 5px;
  font-size: 0.85rem;
  color: var(--errClr);
}

[role="alert"] {
  display: block;
}

.survey__panel__period {
  display: grid;
  grid-gap: 13px;
  grid-template-columns: repeat(2, 150px);
}

.survey__panel__period [type="radio"] {
  opacity: 0;
  display: block;
  width: 150px;
  height: 50px;
  position: absolute;
  z-index: 1;
  cursor: pointer;
}

.survey__panel__period label {
  display: inline-block;
  position: relative;
  width: 150px;
  padding: 15px 30px;
  border: 2px solid var(--lightBlue);
  text-align: center;
  border-radius: 3px;
}

.survey__panel__period label:hover,
.survey__panel__period [type="radio"]:checked + label {
  border-color: var(--intenseBlue);
}

.review__period [type="radio"]:checked + label {
  border: var(--intenseBlue);
}

.radiobox,
.radiobox:checked,
.radiobox:not(:checked),
.checkbox,
.checkbox:not(:checked) {
  opacity: 0;
}

.radiobox:checked + label,
.radiobox:not(:checked) + label,
.checkbox:checked + label,
.checkbox:not(:checked) + label {
  position: relative;
  padding-left: 30px;
}

.radiobox:checked + label:before,
.radiobox:not(:checked) + label:before,
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 18px;
  height: 18px;
  border: 1px solid #ddd;
  border-radius: 100%;
  background-color: var(--whiteClr);
}

.radiobox:checked + label:after,
.radiobox:not(:checked) + label:after {
  content: "";
  width: 8px;
  height: 8px;
  background-color: var(--intenseBlue);
  position: absolute;
  left: 5px;
  top: 5px;
  border-radius: 100%;
  transition: transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),
    opacity 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.radiobox:not(:checked) + label:after,
.checkbox:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}

.radiobox:checked + label:after,
.checkbox:checked + label:after {
  opacity: 1;
  transform: scale(1);
}

.survey__panel__satisfaction label,
.survey__panel__recommendation label,
.survey__panel__personaldetails label,
.survey__panel__hearabout label {
  line-height: 2;
}

.form-group-textarea {
  margin-top: 1rem;
}

.form-group-textarea label {
  display: block;
  font-size: 0.95rem;
}

.form-group-textarea textarea {
  padding: 10px;
  overflow: auto;
  font-size: 0.9rem;
  display: block;
  border: 2px solid var(--lightBlue);
  font-family: inherit;
  width: 100%;
  resize: vertical;
  min-height: 100px;
  max-width: 300px;
  color: var(--darkBlue);
  -webkit-appearance: none;
}

.survey__panel .radiobox {
  margin-left: 10px;
}

.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before {
  border-radius: 0;
}

.checkbox:checked + label:before {
  background-color: var(--intenseBlue);
}

.checkbox:checked + label:after,
.checkbox:not(:checked) + label:after {
  content: "";
  position: absolute;
  left: 4px;
  top: 7px;
  width: 2px;
  height: 2px;
  background-color: var(--whiteClr);
  box-shadow: 2px 0 0 var(--whiteClr), 4px 0 0 var(--whiteClr),
    4px -2px 0 var(--whiteClr), 4px -4px 0 var(--whiteClr),
    4px -6px 0 var(--whiteClr), 4px -8px 0 var(--whiteClr);
  transform: rotate(45deg);
  transition: transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),
    opacity 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),
    background-color 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.survey__panel__personaldetails .form-group {
  margin: 1rem 0;
}

.survey__panel__personaldetails .name,
.survey__panel__personaldetails .email,
.survey__panel__personaldetails .age {
  display: block;
  font-size: 0.95rem;
}

.survey__panel__personaldetails [name="name"],
.survey__panel__personaldetails [name="email"],
.survey__panel__personaldetails [name="country"] {
  width: 100%;
  padding: 0.6rem 0.75rem;
  border: 2px solid var(--lightBlue);
  max-width: 300px;
  -webkit-appearance: none;
}

.survey__panel__personaldetails [name="age"] {
  padding: 0.6rem 0.75rem;
  border: 2px solid var(--lightBlue);
  -webkit-appearance: none;
}

.form-buttons {
  display: flex;
  max-width: 400px;
  margin-left: 10px;
  margin-top: auto;
}

.button {
  --btnClr: #5f6caf;
  display: inline-block;
  padding: 10px 25px;
  background-color: var(--btnClr);
  color: var(--whiteClr);
  border: 2px solid var(--btnClr);
  border-radius: 3px;
  font-size: 0.875rem;
  font-family: inherit;
  cursor: pointer;
}

button[disabled] {
  display: none;
}

.button {
  margin: 0 0.5rem;
}

.button:hover {
  --btnHoverClr: #444e83;
  background-color: var(--btnHoverClr);
  border-color: var(--btnHoverClr);
}

.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}
</style>
<body>
<div style= "background-color :#250033;height">
 <img src = "11.png" width="100"  align="right" style="margin-top: 20px; margin-right: 20px;" />
 <p style=" color:#F0E169;font-family:DecoType Naskh Variants; font-size:45; margin-left:1125px;margin-top:6px;margin-bottom:6px"> المحكمة الشرعية</p>
 <br>
 </div>
 <div class="topnav">
<a href="staff.php"><h1 style="text-align: right; font-size:14;">الرجوع</h1></a>
 </div>
 <br>
 
  <center>  <FONT FACE="Aldhabi" size=20 style ="color:#250033" >   <big> <big> إدخال المعاملات والقضايا  </FONT>
 
<div class="container" style="margin-left:500px;">
 
  <main class="main">
    <form action="#" method="GET" id="survey-form" class="survey" novalidate>
      <div class="progressbar" tabindex="0" role="progressbar" aria-valuemin="1" aria-valuemax="5" aria-valuenow="1" aria-valuetext="Question 1 of 5: How long have you been using our product?">
        <span class="progressbar__step active" aria-hidden="true"></span>
        <span class="progressbar__step" aria-hidden="true"></span>
        <span class="progressbar__step" aria-hidden="true"></span>
        <span class="progressbar__step" aria-hidden="true"></span>
        <span class="progressbar__step" aria-hidden="true"></span>
      </div>

      <section class="survey__panel survey__panel--current" aria-hidden="false" data-index="1" data-panel="firstPanel" data-requirement="option">
        <h2 class="survey__panel__question">
          <span class="visuallyhidden">Question 1 of 5 </span>نوع القضية
        </h2>
        <div class="survey__panel__period">
          <div class="form-group">
            <input id="never" type="radio" name="question_1" value="never" />
            <label for="never">زواج</label>
          </div>
          <div class="form-group">
            <input id="lessthenoneyear" type="radio" name="question_1" value="lessthenoneyear" />
            <label for="lessthenoneyear">طلاق</label>
          </div>
          <div class="form-group">
            <input id="onetotwoyears" type="radio" name="question_1" value="onetotwoyears" />
            <label for="onetotwoyears">وصاية</label>
          </div>
          <div class="form-group">
            <input id="morethentwoyears" type="radio" name="question_1" value="morethentwoyears" />
            <label for="morethentwoyears"><span class="visuallyhidden">more then</span><span aria-hidden="true"></span> ميراث</label>
          </div>
        </div>
        <p class="error-message"></p>
      </section>

      <section class="survey__panel" aria-hidden="true" data-index="2" data-panel="secondPanel" data-requirement="option">
        <h2 class="survey__panel__question">
          <span class="visuallyhidden">Question 2 of 5 </span>كاتب الحجج الخاص بنوع القضية
        </h2>
        <div class="survey__panel__satisfaction">
          <div class="form-group">
            <input id="notsatified" type="radio" class="radiobox" name="question_2" value="Not Satisfied" />
            <label for="notsatified">مصطفى</label>
          </div>
          <div class="form-group">
            <input id="quitesatisfied" type="radio" class="radiobox" name="question_2" value="Quite Satisfied" />
            <label for="quitesatisfied">احمد</label>
          </div>
          <div class="form-group">
            <input id="satisfied" type="radio" class="radiobox" name="question_2" value="Satisfied" />
            <label for="satisfied">ابو محمد</label>
          </div>
          <div class="form-group">
            <input id="completelysatisfied" type="radio" class="radiobox" name="question_2" value="Completely Satisfied" />
            <label for="completelysatisfied">محمود</label>
          </div>
        </div>
        <p class="error-message"></p>
      </section>

      <section class="survey__panel" aria-hidden="true" data-index="3" data-panel="thirdPanel" data-requirement="checkbox">
        <h2 class="survey__panel__question">
          <span class="visuallyhidden">Question 3 of 5 </span>
        </h2>
        <div class="survey__panel__hearabout">
          <div class="form-group">
            <input type="date" class="date" id="date" name="date" value="date" />
            <label for="date">تاريخ بداية الدعوة</label>
          </div>
          <div class="form-group">
            <input type="tel" class="tel" id="tel" name="tel" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
            <label for="tel">رقم الهاتف </label>
          </div>
                   <div class="form-group">
            <input type="checkbox" class="checkbox" id="socialmedia" name="question_3" value="Social Media" />
            <label for="socialmedia">تم</label>
          </div>
        </div>
        <p class="error-message"></p>
      </section>

      <section class="survey__panel" aria-hidden="true" data-index="4" data-panel="fourthPanel" data-requirement="option">
        <h2 class="survey__panel__question">
          <span class="visuallyhidden">Question 4 of 5 </span>وصف القضية
        </h2>
        <div class="survey__panel__recommendation">
         
          <div class="form-group form-group-textarea">
            <label for="recommendation"> : الوصف </label>
            <textarea name="recommendText" id="recommendation" spellcheck="false"></textarea>
          </div>
        </div>
        <p class="error-message"></p>
      </section>

      <section class="survey__panel" aria-hidden="true" data-index="5" data-panel="fifthPanel" data-requirement="name;email;country;age">
        <h2 class="survey__panel__question">
          <span class="visuallyhidden">Question 5 of 5 </span>
        </h2>
        <div class="survey__panel__personaldetails">
          <div class="form-group">
            <label for="name" id="name-label" class="name"></label>
            <input type="text" id="name" name="name" required placeholder="اسم المدعي" />
            <p class="error-message"></p>
          </div>
          <div class="form-group">
            <label for="email" id="email-label" class="email"> : الايميل </label>
            <input type="email" id="email" name="email" required placeholder="الايميل" />
            <p class="error-message"></p>
          </div>
         
          <div class="form-group">
            <label for="number" id="number-label" class="age">رقم القضية</label>
            <input type="number" id="number" name="age" min="0" max="150" required placeholder="" />
            <p class="error-message"></p>
          </div>
        </div>
      </section>
      <div class="form-buttons">
        <button class="button" type="button" name="prev" disabled="disabled" aria-label="Previous" aria-hidden="true">
         السابق
        </button>
        <button class="button" type="button" name="next" aria-label="Next" aria-hidden="false">التالي</button>
        <button class="button" type="submit" id="submit" name="submit" disabled="disabled" aria-hidden="true">
          حفظ/إرسال
        </button>
      </div>
    </form>
  </main>
</div>
<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->
</center>
<script>

function Survey(survey) {
  if (!survey) {
    throw new Error("No Survey Form found!");
  }

  // select the elements
  const progressbar = survey.querySelector(".progressbar");
  const surveyPanels = survey.querySelectorAll(".survey__panel");
  const question1Radios = survey.querySelectorAll("[name='question_1']");
  const question2Radios = survey.querySelectorAll("[name='question_2']");
  const question3CheckBoxes = survey.querySelectorAll("[name='question_3']");
  const question4Radios = survey.querySelectorAll("[name='question_4']");
  const question4Textarea = survey.querySelector("[name='recommendText']");
  const question5Name = survey.querySelector("[name='name']");
  const question5Email = survey.querySelector("[name='email']");
  const question5Country = survey.querySelector("[name='country']");
  const question5Age = document.querySelector("[name='age']");
  const allPanels = Array.from(survey.querySelectorAll(".survey__panel"));
  let progressbarStep = Array.from(
    progressbar.querySelectorAll(".progressbar__step ")
  );
  const mainElement = document.querySelector("main");
  const nextButton = survey.querySelector("[name='next']");
  const prevButton = survey.querySelector("[name='prev']");
  const submitButton = survey.querySelector("[name='submit']");
  let currentPanel = Array.from(surveyPanels).filter((panel) =>
    panel.classList.contains("survey__panel--current")
  )[0];
  const formData = {};
  const options = {
    question1Radios,
    question2Radios,
    question3CheckBoxes,
    question4Radios,
    question4Textarea,
    question5Name,
    question5Email,
    question5Country,
    question5Age
  };
  let dontSubmit = false;

  function storeInitialData() {
    allPanels.map((panel) => {
      let index = panel.dataset.index;
      let panelName = panel.dataset.panel;
      let question = panel
        .querySelector(".survey__panel__question")
        .textContent.trim();
      formData[index] = {
        panelName: panelName,
        question: question
      };
    });
  }

  function updateProgressbar() {
    let index = currentPanel.dataset.index;
    let currentQuestion = formData[`${parseFloat(index)}`].question;
    progressbar.setAttribute("aria-valuenow", index);
    progressbar.setAttribute("aria-valuetext", currentQuestion);
    progressbarStep[index - 1].classList.add("active");
  }

  function updateFormData({ target }) {
    const index = +currentPanel.dataset.index;
    const { name, type, value } = target;
    if (type === "checkbox") {
      if (formData[index].answer === undefined) {
        formData[index].answer = {
          [name]: [value]
        };
        return;
      }
      if (formData[index]["answer"][`${name}`].includes(value)) {
        const position = formData[index]["answer"][`${name}`].findIndex(
          (elem) => elem === value
        );
        formData[index]["answer"][`${name}`].splice(position, 1);
      } else {
        formData[index]["answer"][`${name}`].push(value);
      }
      return;
    }
    if (index === 4 || index === 5) {
      let copy;
      const original = formData[index].answer;
      if (original === undefined) {
        formData[index].answer = {
          [name]: value
        };
        copy = { ...formData[index].answer };
      } else {
        formData[index].answer = { ...original, [name]: value };
      }
      return;
    }

    formData[index].answer = {
      [name]: value
    };
  }

  function showError(input, text) {
    const formControl = input.parentElement;
    const errorElement = formControl.querySelector(".error-message");
    errorElement.innerText = text;
    errorElement.setAttribute("role", "alert");
    if (survey.classList.contains("form-error")) return;
    survey.classList.add("form-error");
  }

  function noErrors(input) {
    if (!input) {
      const errorElement = currentPanel.querySelector(".error-message");
      errorElement.textContent = "";
      errorElement.removeAttribute("role");
      survey.classList.remove("form-error");
      return;
    }
    const formControl = input.parentElement;
    const errorElement = formControl.querySelector(".error-message");
    errorElement.innerText = "";
    errorElement.removeAttribute("role");
  }

  function getName(input) {
    if (input.name === "age") return "Age";
    if (input.name === "country") return "Country";
    return `${input.id.charAt(0).toUpperCase()}${input.id.slice(1)}`;
  }

  function checkEmail(input) {
    if (input.value.trim() === "") {
      showError(input, `${getName(input)} is required`);
    } else {
      const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (pattern.test(input.value.trim())) {
        noErrors(input);
      } else {
        showError(input, "Email is not valid");
      }
    }
  }

  function checkRequired(input) {
    if (input.value.trim() === "") {
      showError(input, `${getName(input)} is required`);
    } else {
      noErrors(input);
    }
  }

  function checkSelection(input) {
    if (input.selectedIndex === 0) {
      showError(input, `${getName(input)} is required`);
    } else {
      noErrors(input);
    }
  }

  function checkAge(age) {
    if (age.value === "") {
      showError(age, `${getName(age)} is required`);
      return;
    }
    if (+age.value > 0) {
      noErrors(age);
    }
  }

  function checkRequirements() {
    const requirement = currentPanel.dataset.requirement;
    const index = currentPanel.dataset.index;
    const errorElement = currentPanel.querySelector(".error-message");

    if (!formData[index].hasOwnProperty("answer") && +index === 5) {
      checkRequired(question5Name);
      checkEmail(question5Email);
      checkSelection(question5Country);
      checkAge(question5Age);
    } else if (formData[index].hasOwnProperty("answer") && +index === 5) {
      const req = requirement.split(";");
      let data = Object.keys(formData[index].answer);
      let arr = [];
      let res;
      for (let i = 0; i < data.length; i++) {
        res = req.includes(data[i]) ? data[i] : "";
        arr.push(res);
      }
      if (arr.includes("name")) checkRequired(question5Name);
      if (arr.includes("email")) checkEmail(question5Email);
      if (arr.includes("country")) checkSelection(question5Country);
      if (arr.includes("age")) checkAge(question5Age);
      if (
        arr.length === 4 &&
        arr.every((elem) => formData[index].answer.hasOwnProperty(elem))
      ) {
        survey.classList.remove("form-error");
        dontSubmit = true;
      }
    } else {
      errorElement.textContent = `Select an ${requirement} to continue.`;
      errorElement.setAttribute("role", "alert");
      survey.classList.add("form-error");
    }
  }

  function updateProgressbarBar() {
    const index = currentPanel.dataset.index;
    let currentQuestion = formData[`${parseFloat(index)}`].question;
    progressbar.setAttribute("aria-valuenow", index);
    progressbar.setAttribute("aria-valuetext", currentQuestion);
    progressbarStep[index].classList.remove("active");
  }

  function displayNextPanel() {
    currentPanel.classList.remove("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", true);
    currentPanel = currentPanel.nextElementSibling;
    currentPanel.classList.add("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", false);
    updateProgressbar();
    if (+currentPanel.dataset.index > 1) {
      prevButton.disabled = false;
      prevButton.setAttribute("aria-hidden", false);
    }
    if (+currentPanel.dataset.index === 5) {
      nextButton.disabled = true;
      nextButton.setAttribute("aria-hidden", true);
      submitButton.disabled = false;
      submitButton.setAttribute("aria-hidden", false);
    }
  }

  function displayPrevPanel() {
    currentPanel.classList.remove("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", true);
    currentPanel = currentPanel.previousElementSibling;
    currentPanel.classList.add("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", false);
    updateProgressbarBar();
    if (+currentPanel.dataset.index === 1) {
      prevButton.disabled = true;
      prevButton.setAttribute("aria-hidden", true);
    }
    if (+currentPanel.dataset.index < 5) {
      nextButton.disabled = false;
      nextButton.setAttribute("aria-hidden", false);
      submitButton.disabled = true;
      submitButton.setAttribute("aria-hidden", true);
    }
  }

  function handleprevButton() {
    displayPrevPanel();
  }

  function handleNextButton() {
    const index = currentPanel.dataset.index;
    if (!formData[index].hasOwnProperty("answer")) {
      checkRequirements();
    } else {
      noErrors();
      displayNextPanel();
    }
  }

  // submitting the form
  function handleFormSubmit(e) {
    checkRequirements();
    if (!dontSubmit) {
      e.preventDefault();
    } else {
      mainElement.classList.add("submission");
      mainElement.setAttribute("role", "alert");
      mainElement.innerHTML = `<svg width="126" height="118" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 118" aria-hidden="true" style="transform: translateX(50%)"><path d="M52.5 118c28.995 0 52.5-23.729 52.5-53S81.495 12 52.5 12 0 35.729 0 65s23.505 53 52.5 53z" fill="#B9CCED"/><path d="M45.726 87L23 56.877l8.186-6.105 15.647 20.74L118.766 0 126 7.192 45.726 87z" fill="#A7E9AF"/></svg>
      <h2 class="submission">Thanks for your time</h2>
      <p>The form was successfully submitted`;
      return false;
    }
  }

  storeInitialData();

  // Add event listeners
  function addListenersTo({
    question1Radios,
    question2Radios,
    question3CheckBoxes,
    question4Radios,
    ...inputs
  }) {
    question1Radios.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    question2Radios.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    question3CheckBoxes.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    question4Radios.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    let {
      question4Textarea,
      question5Name,
      question5Email,
      question5Country,
      question5Age
    } = inputs;
    question4Textarea.addEventListener("change", updateFormData);
    question5Name.addEventListener("change", updateFormData);
    question5Email.addEventListener("change", updateFormData);
    question5Country.addEventListener("change", updateFormData);
    question5Age.addEventListener("change", updateFormData);
  }
  nextButton.addEventListener("click", handleNextButton);
  prevButton.addEventListener("click", handleprevButton);
  addListenersTo(options);
  survey.addEventListener("submit", handleFormSubmit);
}

const survey = Survey(document.querySelector(".survey"));


</script>




</html>