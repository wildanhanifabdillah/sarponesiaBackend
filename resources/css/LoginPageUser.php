{
margin: 0;
padding: 0;
box-sizing: border-box;
}

html, body {
height: 100%;
font-family: Poppins, Helvetica, Arial, sans-serif;
}

:root {
--fallback-font-stack: Helvetica, Arial, sans-serif;
}

.welcomeSection {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-image: linear-gradient(69deg, #d2d1cf 31.23%, #6c6b6a 112.57%);
overflow: hidden;
height: 100%;
width: 100%;
}

.flexRow {
display: flex;
justify-content: space-between;
align-items: center;
gap: 0 10px;
margin: 131px auto;
width: 1199.943px;
max-width: 85%;
}
@media (max-width: 991px) {
.flexRow {
flex-direction: column;
gap: 30px 10px;
}
}
@media (max-width: 575px) {
.flexRow {
margin: 80px auto;
}
}
@media (max-width: 383px) {
.flexRow {
margin: 50px auto;
}
}
.flexColumn {
display: flex;
flex-direction: column;
align-items: center;
width: 590px;
min-width: 0;
}
@media (max-width: 991px) {
.flexColumn {
width: 100%;
min-width: unset;
}
}
.heroTitle {
display: flex;
justify-content: center;
font: 600 40px/1.5 Poppins, Helvetica, Arial, serif;
color: #231507;
text-align: center;
}
@media (max-width: 991px) {
.heroTitle {
align-items: flex-start;
font-size: 36px;
}
}
@media (max-width: 479px) {
.heroTitle {
font-size: 32px;
}
}
.accountInfoInstruction {
display: flex;
justify-content: center;
margin: 7px 0 0;
width: 90.68%;
font: 400 24px/1.5 Poppins, Helvetica, Arial, serif;
color: #3c240b;
text-align: center;
}
@media (max-width: 991px) {
.accountInfoInstruction {
align-items: flex-start;
font-size: 22px;
}
}
@media (max-width: 479px) {
.accountInfoInstruction {
font-size: 20px;
}
}

input[type="text"],
select {
margin: 36px 0 0;
width: 100%;
border-radius: 40px;
outline: 3px solid #190f05;
outline-offset: -3px;
font: 500 24px/1.5 Poppins, Helvetica, Arial, serif;
text-align: center;
padding: 22px 0;
background-color: transparent; /* Membuat latar belakang transparan */
}

input[type="text"]::placeholder {
color: rgba(60, 36, 11, 0.678);
font: 500 24px/1.5 Poppins, Helvetica, Arial, serif;
text-align: center;
}

@media (max-width: 991px) {
.input[type="text"] {
align-items: flex-start;
font-size: 22px;
}
}
@media (max-width: 479px) {
.input[type="text"] {
font-size: 20px;
}
}
.forgotPasswordText {
display: flex;
justify-content: flex-end;
margin: 4px 0 0;
width: 100%;
font: 700 16px/1.5 Poppins, Helvetica, Arial, serif;
color: #190f05;
text-align: right;
}
input[type=submit] {
display: flex;
justify-content: center;
margin: 24px 0 0;
width: 590px;
max-width: 100%;
font: 600 36px/1.5 Poppins, Helvetica, Arial, serif;
color: #fefefc;
text-align: center;
background-color: #543310;
border-radius: 40px;
padding: 13px 8px;
}

input[type=submit]:hover {
background-color: #d3b58f;
color: #1a0e07;
cursor: pointer;
}
.accountCreationPrompt_box {
display: flex;
justify-content: center;
margin: 24px 0 0;
}
@media (max-width: 991px) {
.accountCreationPrompt_box {
align-items: flex-start;
}
}
.accountCreationPrompt {
font: 400 24px/1.5 Poppins, Helvetica, Arial, serif;
color: black;
text-align: center;
}
@media (max-width: 991px) {
.accountCreationPrompt {
font-size: 22px;
}
}
@media (max-width: 479px) {
.accountCreationPrompt {
font-size: 20px;
}
}
.accountCreationPrompt_span0 {
font: 1em/1.5 Poppins, Helvetica, Arial, serif;
color: #231507;
}
.accountCreationPrompt_span1 {
font: 1em/1.5 Poppins, Helvetica, Arial, serif;
color: #0056d2;
text-decoration: underline;
}
.welcomeImage {
width: 565px;
min-width: 0;
-o-object-fit: cover;
object-fit: cover;
}
@media (max-width: 991px) {
.welcomeImage {
width: 100%;
min-width: unset;
max-width: 565px;
}
}