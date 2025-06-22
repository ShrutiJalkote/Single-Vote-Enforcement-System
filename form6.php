<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .swal2-popup.swal2-toast {
            box-sizing: border-box;
            grid-column: 1/4 !important;
            grid-row: 1/4 !important;
            grid-template-columns: min-content auto min-content;
            padding: 1em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
            pointer-events: all
        }

        .swal2-popup.swal2-toast>* {
            grid-column: 2
        }

        .swal2-popup.swal2-toast .swal2-title {
            margin: .5em 1em;
            padding: 0;
            font-size: 1em;
            text-align: initial
        }

        .swal2-popup.swal2-toast .swal2-loading {
            justify-content: center
        }

        .swal2-popup.swal2-toast .swal2-input {
            height: 2em;
            margin: .5em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-validation-message {
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            grid-column: 3/3;
            grid-row: 1/99;
            align-self: center;
            width: .8em;
            height: .8em;
            margin: 0;
            font-size: 2em
        }

        .swal2-popup.swal2-toast .swal2-html-container {
            margin: .5em 1em;
            padding: 0;
            overflow: initial;
            font-size: 1em;
            text-align: initial
        }

        .swal2-popup.swal2-toast .swal2-html-container:empty {
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-loader {
            grid-column: 1;
            grid-row: 1/99;
            align-self: center;
            width: 2em;
            height: 2em;
            margin: .25em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            grid-column: 1;
            grid-row: 1/99;
            align-self: center;
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0 .5em 0 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: bold
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            justify-content: flex-start;
            height: auto;
            margin: 0;
            margin-top: .5em;
            padding: 0 .5em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: .25em .5em;
            padding: .4em .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -0.8em;
            left: -0.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -0.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            animation: swal2-toast-hide .1s forwards
        }

        div:where(.swal2-container) {
            display: grid;
            position: fixed;
            z-index: 1060;
            inset: 0;
            box-sizing: border-box;
            grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
            grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
            height: 100%;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        div:where(.swal2-container).swal2-backdrop-show,
        div:where(.swal2-container).swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        div:where(.swal2-container).swal2-backdrop-hide {
            background: rgba(0, 0, 0, 0) !important
        }

        div:where(.swal2-container).swal2-top-start,
        div:where(.swal2-container).swal2-center-start,
        div:where(.swal2-container).swal2-bottom-start {
            grid-template-columns: minmax(0, 1fr) auto auto
        }

        div:where(.swal2-container).swal2-top,
        div:where(.swal2-container).swal2-center,
        div:where(.swal2-container).swal2-bottom {
            grid-template-columns: auto minmax(0, 1fr) auto
        }

        div:where(.swal2-container).swal2-top-end,
        div:where(.swal2-container).swal2-center-end,
        div:where(.swal2-container).swal2-bottom-end {
            grid-template-columns: auto auto minmax(0, 1fr)
        }

        div:where(.swal2-container).swal2-top-start>.swal2-popup {
            align-self: start
        }

        div:where(.swal2-container).swal2-top>.swal2-popup {
            grid-column: 2;
            align-self: start;
            justify-self: center
        }

        div:where(.swal2-container).swal2-top-end>.swal2-popup,
        div:where(.swal2-container).swal2-top-right>.swal2-popup {
            grid-column: 3;
            align-self: start;
            justify-self: end
        }

        div:where(.swal2-container).swal2-center-start>.swal2-popup,
        div:where(.swal2-container).swal2-center-left>.swal2-popup {
            grid-row: 2;
            align-self: center
        }

        div:where(.swal2-container).swal2-center>.swal2-popup {
            grid-column: 2;
            grid-row: 2;
            align-self: center;
            justify-self: center
        }

        div:where(.swal2-container).swal2-center-end>.swal2-popup,
        div:where(.swal2-container).swal2-center-right>.swal2-popup {
            grid-column: 3;
            grid-row: 2;
            align-self: center;
            justify-self: end
        }

        div:where(.swal2-container).swal2-bottom-start>.swal2-popup,
        div:where(.swal2-container).swal2-bottom-left>.swal2-popup {
            grid-column: 1;
            grid-row: 3;
            align-self: end
        }

        div:where(.swal2-container).swal2-bottom>.swal2-popup {
            grid-column: 2;
            grid-row: 3;
            justify-self: center;
            align-self: end
        }

        div:where(.swal2-container).swal2-bottom-end>.swal2-popup,
        div:where(.swal2-container).swal2-bottom-right>.swal2-popup {
            grid-column: 3;
            grid-row: 3;
            align-self: end;
            justify-self: end
        }

        div:where(.swal2-container).swal2-grow-row>.swal2-popup,
        div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
            grid-column: 1/4;
            width: 100%
        }

        div:where(.swal2-container).swal2-grow-column>.swal2-popup,
        div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
            grid-row: 1/4;
            align-self: stretch
        }

        div:where(.swal2-container).swal2-no-transition {
            transition: none !important
        }

        div:where(.swal2-container) div:where(.swal2-popup) {
            display: none;
            position: relative;
            box-sizing: border-box;
            grid-template-columns: minmax(0, 100%);
            width: 32em;
            max-width: 100%;
            padding: 0 0 1.25em;
            border: none;
            border-radius: 5px;
            background: #fff;
            color: #545454;
            font-family: inherit;
            font-size: 1rem
        }

        div:where(.swal2-container) div:where(.swal2-popup):focus {
            outline: none
        }

        div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
            overflow-y: hidden
        }

        div:where(.swal2-container) h2:where(.swal2-title) {
            position: relative;
            max-width: 100%;
            margin: 0;
            padding: .8em 1em 0;
            color: inherit;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        div:where(.swal2-container) div:where(.swal2-actions) {
            display: flex;
            z-index: 1;
            box-sizing: border-box;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: auto;
            margin: 1.25em auto 0;
            padding: 0
        }

        div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
        }

        div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
        }

        div:where(.swal2-container) div:where(.swal2-loader) {
            display: none;
            align-items: center;
            justify-content: center;
            width: 2.2em;
            height: 2.2em;
            margin: 0 1.875em;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border-width: .25em;
            border-style: solid;
            border-radius: 100%;
            border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
        }

        div:where(.swal2-container) button:where(.swal2-styled) {
            margin: .3125em;
            padding: .625em 1.1em;
            transition: box-shadow .1s;
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
            font-weight: 500
        }

        div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
            cursor: pointer
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #7066e0;
            color: #fff;
            font-size: 1em
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
            box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #dc3741;
            color: #fff;
            font-size: 1em
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
            box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #6e7881;
            color: #fff;
            font-size: 1em
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
            box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus {
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled):focus {
            outline: none
        }

        div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
            border: 0
        }

        div:where(.swal2-container) div:where(.swal2-footer) {
            margin: 1em 0 0;
            padding: 1em 1em 0;
            border-top: 1px solid #eee;
            color: inherit;
            font-size: 1em;
            text-align: center
        }

        div:where(.swal2-container) .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            grid-column: auto !important;
            overflow: hidden;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px
        }

        div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        div:where(.swal2-container) img:where(.swal2-image) {
            max-width: 100%;
            margin: 2em auto 1em
        }

        div:where(.swal2-container) button:where(.swal2-close) {
            z-index: 2;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: -1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s, box-shadow .1s;
            border: none;
            border-radius: 5px;
            background: rgba(0, 0, 0, 0);
            color: #ccc;
            font-family: monospace;
            font-size: 2.5em;
            cursor: pointer;
            justify-self: end
        }

        div:where(.swal2-container) button:where(.swal2-close):hover {
            transform: none;
            background: rgba(0, 0, 0, 0);
            color: #f27474
        }

        div:where(.swal2-container) button:where(.swal2-close):focus {
            outline: none;
            box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
        }

        div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
            border: 0
        }

        div:where(.swal2-container) .swal2-html-container {
            z-index: 1;
            justify-content: center;
            margin: 1em 1.6em .3em;
            padding: 0;
            overflow: auto;
            color: inherit;
            font-size: 1.125em;
            font-weight: normal;
            line-height: normal;
            text-align: center;
            word-wrap: break-word;
            word-break: break-word
        }

        div:where(.swal2-container) input:where(.swal2-input),
        div:where(.swal2-container) input:where(.swal2-file),
        div:where(.swal2-container) textarea:where(.swal2-textarea),
        div:where(.swal2-container) select:where(.swal2-select),
        div:where(.swal2-container) div:where(.swal2-radio),
        div:where(.swal2-container) label:where(.swal2-checkbox) {
            margin: 1em 2em 3px
        }

        div:where(.swal2-container) input:where(.swal2-input),
        div:where(.swal2-container) input:where(.swal2-file),
        div:where(.swal2-container) textarea:where(.swal2-textarea) {
            box-sizing: border-box;
            width: auto;
            transition: border-color .1s, box-shadow .1s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: rgba(0, 0, 0, 0);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
            color: inherit;
            font-size: 1.125em
        }

        div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
        div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
        div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        div:where(.swal2-container) input:where(.swal2-input):focus,
        div:where(.swal2-container) input:where(.swal2-file):focus,
        div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
            border: 1px solid #b4dbed;
            outline: none;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
        }

        div:where(.swal2-container) input:where(.swal2-input)::placeholder,
        div:where(.swal2-container) input:where(.swal2-file)::placeholder,
        div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
            color: #ccc
        }

        div:where(.swal2-container) .swal2-range {
            margin: 1em 2em 3px;
            background: #fff
        }

        div:where(.swal2-container) .swal2-range input {
            width: 80%
        }

        div:where(.swal2-container) .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        div:where(.swal2-container) .swal2-range input,
        div:where(.swal2-container) .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        div:where(.swal2-container) .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        div:where(.swal2-container) .swal2-file {
            width: 75%;
            margin-right: auto;
            margin-left: auto;
            background: rgba(0, 0, 0, 0);
            font-size: 1.125em
        }

        div:where(.swal2-container) .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        div:where(.swal2-container) .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: rgba(0, 0, 0, 0);
            color: inherit;
            font-size: 1.125em
        }

        div:where(.swal2-container) .swal2-radio,
        div:where(.swal2-container) .swal2-checkbox {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        div:where(.swal2-container) .swal2-radio label,
        div:where(.swal2-container) .swal2-checkbox label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        div:where(.swal2-container) .swal2-radio input,
        div:where(.swal2-container) .swal2-checkbox input {
            flex-shrink: 0;
            margin: 0 .4em
        }

        div:where(.swal2-container) label:where(.swal2-input-label) {
            display: flex;
            justify-content: center;
            margin: 1em auto 0
        }

        div:where(.swal2-container) div:where(.swal2-validation-message) {
            align-items: center;
            justify-content: center;
            margin: 1em 0 0;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        div:where(.swal2-container) div:where(.swal2-validation-message)::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        div:where(.swal2-container) .swal2-progress-steps {
            flex-wrap: wrap;
            align-items: center;
            max-width: 100%;
            margin: 1.25em auto;
            padding: 0;
            background: rgba(0, 0, 0, 0);
            font-weight: 600
        }

        div:where(.swal2-container) .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            flex-shrink: 0;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #2778c4;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #2778c4
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            flex-shrink: 0;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #2778c4
        }

        div:where(.swal2-icon) {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 2.5em auto .6em;
            border: 0.25em solid rgba(0, 0, 0, 0);
            border-radius: 50%;
            border-color: #000;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            user-select: none
        }

        div:where(.swal2-icon) .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        div:where(.swal2-icon).swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        div:where(.swal2-icon).swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        div:where(.swal2-icon).swal2-error.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
            animation: swal2-animate-error-x-mark .5s
        }

        div:where(.swal2-icon).swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        div:where(.swal2-icon).swal2-warning.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-i-mark .5s
        }

        div:where(.swal2-icon).swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        div:where(.swal2-icon).swal2-info.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-i-mark .8s
        }

        div:where(.swal2-icon).swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        div:where(.swal2-icon).swal2-question.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-question-mark .8s
        }

        div:where(.swal2-icon).swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -0.4375em;
            left: -2.0635em;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -0.6875em;
            left: 1.875em;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        div:where(.swal2-icon).swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -0.25em;
            left: -0.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        div:where(.swal2-icon).swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            transform: rotate(-45deg)
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
            animation: swal2-animate-success-line-tip .75s
        }

        div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
            animation: swal2-animate-success-line-long .75s
        }

        div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .swal2-show {
            animation: swal2-show .3s
        }

        .swal2-hide {
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            margin-right: initial;
            margin-left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-0.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(0.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0deg)
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -0.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(0.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(0.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(0.5);
                opacity: 0
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -0.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(0.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(0.4);
                opacity: 0
            }

            80% {
                margin-top: -0.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-animate-question-mark {
            0% {
                transform: rotateY(-360deg)
            }

            100% {
                transform: rotateY(0)
            }
        }

        @keyframes swal2-animate-i-mark {
            0% {
                transform: rotateZ(45deg);
                opacity: 0
            }

            25% {
                transform: rotateZ(-25deg);
                opacity: .4
            }

            50% {
                transform: rotateZ(15deg);
                opacity: .8
            }

            75% {
                transform: rotateZ(-5deg);
                opacity: 1
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            background-color: rgba(0, 0, 0, 0) !important;
            pointer-events: none
        }

        body.swal2-no-backdrop .swal2-container .swal2-popup {
            pointer-events: all
        }

        body.swal2-no-backdrop .swal2-container .swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            box-sizing: border-box;
            width: 360px;
            max-width: 100%;
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            inset: 0 auto auto 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            inset: 0 0 auto auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-start,
        body.swal2-toast-shown .swal2-container.swal2-top-left {
            inset: 0 auto auto 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-start,
        body.swal2-toast-shown .swal2-container.swal2-center-left {
            inset: 50% auto auto 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            inset: 50% auto auto 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            inset: 50% 0 auto auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-start,
        body.swal2-toast-shown .swal2-container.swal2-bottom-left {
            inset: auto auto 0 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            inset: auto auto 0 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            inset: auto 0 0 auto
        }
    </style>
 
    <link href="main.1c1a913f.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="544.6c11190e.chunk.css">
    <link rel="stylesheet" type="text/css" href="790.4957cc40.chunk.css">
    <link rel="stylesheet" type="text/css" href="notosansjp.css">
</head>

<body>
    <form id="reg" action="insert.php" method="post">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="App">
            <div id="textContent">
                <div style=""></div>
                <div class="row d-lg-flex navbar-justify-content new-HomePage m-0"
                    style="position: sticky; top: 0px; z-index: 1; background-color: rgb(26, 115, 232);">
                    <div class="col-md-4 col-lg-4 col-6">
                        <div class="row mt-2 logo-margin-left" style="cursor: pointer;">
                            <img  src="mylogo1.png" alt="HomeImage" width="140" height="80" class="mr-2 logo-height" tabindex="0">
                            
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-lg-4 col-12  logout-row-margin-top">
                        <div class="row nav-bar-tabs-alignment mr-5">
                            <div class="logout-padding">
                                <div class="profile logout-uername-margin-top" tabindex="0">
                                   
                                    <div class="logout-card" tabindex="0">
                                        <div style="cursor: pointer;"><img class="generic-icon "
                                              
                                                alt="logout icon"><span class="logout-underline">Log out</span></div>
                                        <div style="cursor: pointer;"><img class="generic-icon "
                                              
                                                alt="family icon"><span class="logout-underline">Profile</span></div>
                                        <div style="cursor: pointer;"><img class="generic-icon "
                                              
                                                alt="password icon"><span class="logout-underline">Change
                                                Password</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid paddingremove">
                    <div class="flex-container" aria-label="On Form 6" tabindex="0">
                        <div class="col-lg-3 col-md-4 col-6 pt-4 d-none d-md-block sidenav">
                            
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 pt-3 pl-0 paddingremove backgroudform6">
                            <div class="container" id="form7main">
                                <div class="form7main paddingremove">
                                    <header>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-auto col-auto col-lg-auto col-sm-auto letter">
                                                    <p class="form-header-name" style="margin-bottom: 4px;">Form 6</p>
                                                    <p class="form-header-rules" align="center"
                                                        style="margin-bottom: 4px;">(See Rules 13(1) and (26) of the
                                                        Registration of Electors Rules, 1960)</p>
                                                    <p class="form-header-label" align="center" color="#000000DE"
                                                        style="margin-bottom: 5px;">ELECTION COMMISSION OF INDIA</p>
                                                    <p class="form-header-label" align="center" color="#000000DE"
                                                        style="margin-bottom: 5px;">Application Form for New Voters</p>
                                                </div>
                                            </div>
                                            <div class="row header6B">
                                                <div class="col-md-auto col-4 col-lg-auto col-sm-auto align-self-end">
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                    <form>
                                        <div class="box">
                                            <div class="form-title">A. Select State, District &amp;
                                                Assembly/Parliamentary Constituency</div>
                                            <p class="boxparagraph_form6">To, <br> The Electoral Registration Officer,
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col"><label class="select-label">State<b
                                                                    class="text-danger"> *</b></label></div>
                                                        <div class="col-md-12">
                                                            <div><select class="form-select" name="stateCode"
                                                                    aria-label="State">
                                                                    <option value="">Select State</option>
                                                                    <option value="U01">Andaman &amp; Nicobar Islands
                                                                    </option>
                                                                    <option value="S01">Andhra Pradesh</option>
                                                                    <option value="S02">Arunachal Pradesh</option>
                                                                    <option value="S03">Assam</option>
                                                                    <option value="S04">Bihar</option>
                                                                    <option value="U02">Chandigarh</option>
                                                                    <option value="S26">Chhattisgarh</option>
                                                                    <option value="U03">Dadra &amp; Nagar Haveli and
                                                                        Daman &amp; Diu</option>
                                                                    <option value="S05">Goa</option>
                                                                    <option value="S06">Gujarat</option>
                                                                    <option value="S07">Haryana</option>
                                                                    <option value="S08">Himachal Pradesh</option>
                                                                    <option value="U08">Jammu and Kashmir</option>
                                                                    <option value="S27">Jharkhand</option>
                                                                    <option value="S10">Karnataka</option>
                                                                    <option value="S11">Kerala</option>
                                                                    <option value="U09">Ladakh</option>
                                                                    <option value="U06">Lakshadweep</option>
                                                                    <option value="S12">Madhya Pradesh</option>
                                                                    <option value="S13">Maharashtra</option>
                                                                    <option value="S14">Manipur</option>
                                                                    <option value="S15">Meghalaya</option>
                                                                    <option value="S16">Mizoram</option>
                                                                    <option value="S17">Nagaland</option>
                                                                    <option value="U05">NCT OF Delhi</option>
                                                                    <option value="S18">Odisha</option>
                                                                    <option value="U07">Puducherry</option>
                                                                    <option value="S19">Punjab</option>
                                                                    <option value="S20">Rajasthan</option>
                                                                    <option value="S21">Sikkim</option>
                                                                    <option value="S22">Tamil Nadu</option>
                                                                    <option value="S29">Telangana</option>
                                                                    <option value="S23">Tripura</option>
                                                                    <option value="S24">Uttar Pradesh</option>
                                                                    <option value="S28">Uttarakhand</option>
                                                                    <option value="S25">West Bengal</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col"><label class="select-label">District</label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div><select class="form-select" name="districtCd"
                                                                    aria-label="District">
                                                                    <option value="">Select District</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2 ">
                                                <div class="col-lg-5 partAradio">
                                                    <div class="library-radio" role="radiogroup"><input type="radio"
                                                            id="assemblyNoRadio"
                                                            name="assemblyOrParliamentaryConstituency"
                                                            aria-checked="false"
                                                            aria-label="No. &amp; Name of Assembly Constituency"
                                                            class="col-auto" value="ac"><label
                                                            class="col-auto  radio-label" for="assemblyNoRadio"
                                                            style="opacity: 1;">No. &amp; Name of Assembly
                                                            Constituency<b class="text-danger"> *</b></label></div>
                                                </div>
                                            </div>
                                            <div class="display6">
                                                <div class="col-md-2">
                                                    <div class="form-group"><input type="text" name="assemblyNoText"
                                                            autocomplete="new-password" aria-label="Enter AC Number"
                                                            placeholder="No." maxlength="1000" minlength="0"
                                                            class="library-input form-control" value=""></div>
                                                </div>
                                                <div class=""><label class="select-label"></label></div>
                                                <div class="col-md-4">
                                                    <div><select class="form-select" name="assemblyNo" aria-label="">
                                                            <option value="">Select AC</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 text-center oralign">Or</div>
                                            </div>
                                            <div class="col-lg-6 partAradio">
                                                <div class="row p-2">
                                                    <div class="library-radio" role="radiogroup"><input type="radio"
                                                            id="parliamentaryNo"
                                                            name="assemblyOrParliamentaryConstituency"
                                                            aria-checked="false"
                                                            aria-label="No. &amp; Name of Parliamentary Constituency@"
                                                            class="col-auto"   value="pc"><label
                                                            class="col-auto  radio-label" for="parliamentaryNo"
                                                            style="opacity: 1; font-weight: 500;">No. &amp; Name of
                                                            Parliamentary Constituency@<b class="text-danger">
                                                                *</b></label></div>
                                                    <div class="smallText smalltextA">(@Only for Union Territories not
                                                        having Legislative Assembly)</div>
                                                </div>
                                            </div>
                                            <div class="display6">
                                                <div class="col-md-2">
                                                    <div class="form-group"><input type="text" name="pcNo"
                                                            autocomplete="new-password" aria-label="Enter PC Number"
                                                            placeholder="No." maxlength="1000" minlength="0"
                                                            class="library-input form-control" value=""></div>
                                                </div>
                                                <div class=""><label class="select-label"></label></div>
                                                <div class="col-md-4">
                                                    <div><select class="form-select" name="parliamentaryNo"
                                                            aria-label="">
                                                            <option>Select PC</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <p class="partAsubmit">I submit application for inclusion of my name in the
                                                electoral roll for the above constituency.</p>
                                            
                                        </div>
                                        <div class="box">
                                            <div class="form-title">B. Personal Details</div>
                                            <div class="partCalign">
                                                <div class="row myrowform6">
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label class="input-label">1. First
                                                                    Name followed by Middle Name<b class="text-danger">
                                                                        *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="firstName" autocomplete="new-password"
                                                                        aria-label="1. First Name followed by Middle Name"
                                                                        placeholder=""  maxlength="30"
                                                                        minlength="0" id="firstB"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="First Name Regional" type="text"
                                                                        id="regfirst"  class="form-control"
                                                                        iconclass="iconclass" placeholder=" "
                                                                        autocomplete="one-time-code" value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label class="input-label">Surname
                                                                    (if any)</label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="lastName" autocomplete="new-password"
                                                                        aria-label="Surname (if any)" placeholder=""
                                                                          maxlength="30" minlength="0"
                                                                        id="fNameR" class="library-input form-control"
                                                                        value=""></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="Sur Name Regional" type="text"
                                                                        id="regSName"   class="form-control"
                                                                        iconclass="iconclass" placeholder=" "
                                                                        autocomplete="one-time-code" value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 pr-2">
                                                <div class="row p-2">
                                                    <div class="col-md-12"><label class="upload-label" for="upload-image">Upload
                                                            Photograph (Unsigned and Passport size color photograph(4.5
                                                            cm X 3.5 cm) showing front view of full face with white
                                                            background.)(Document size maximum 2MB,.jpg,.jpeg) <b
                                                                class="text-danger">*</b></label></div>
                                                    <div class="col-md-12">
                                                        <div class="inputImageWrapper"><input id="upload-image"
                                                                name="upload photo" type="file" 
                                                                class="form-control library-file-upload  "
                                                                accept=".jpeg, .jpg"  
                                                                aria-label="Upload Photograph (Unsigned and Passport size color photograph(4.5 cm X 3.5 cm) showing front view of full face with white background.)(Document size maximum 2MB,.jpg,.jpeg)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="box">
                                            <div class="form-title">C. Name and Surname of any one of the relatives
                                            </div>
                                            <div class="partCalign"><span class="textheadingnum"
                                                    aria-label="Part C. Name and Surname of any one of the relatives"
                                                    tabindex="0">2(a.)&nbsp;Relatives</span>
                                                <div class="row">
                                                    <div class="col-lg-2 radiopartb">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="relatives" name="relatives" aria-checked="false"
                                                                aria-label="Father"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                  value="FTHR"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Father</label></div>
                                                    </div>
                                                    <div class="col-lg-2 radioalignC">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="relatives1" name="relatives1" aria-checked="false"
                                                                aria-label="Mother"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                  value="MTHR"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Mother</label></div>
                                                    </div>
                                                    <div class="col-lg-2 radioalignC">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="relatives2" name="relatives2" aria-checked="false"
                                                                aria-label="Husband"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                 value="HSBN"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Husband</label></div>
                                                    </div>
                                                    <div class="col-lg-2 radioC">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="relatives3" name="relatives3" aria-checked="false"
                                                                aria-label="Wife"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                  value="WIFE"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Wife</label></div>
                                                    </div>
                                                    <div class="col-lg-6 radiolastalignC">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="relatives4" name="relatives4" aria-checked="false"
                                                                aria-label="Legal Guardian in case of orphan/Third Gender"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                  value="OTHR"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Legal Guardian in case of
                                                                orphan/Third Gender</label></div>
                                                    </div>
                                                </div>
                                                <div class="row myrowform6">
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12 partCalignn"><label
                                                                    class="input-label">b.Name<b class="text-danger">
                                                                        *</b></label></div>
                                                            <div class="col-md-12 partCalignn">
                                                                <div class="form-group"><input type="text"
                                                                        name="applicantRelativeName"
                                                                        autocomplete="new-password" aria-label="Name"
                                                                        placeholder=""   maxlength="30"
                                                                        minlength="0" id="fNameSur"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 partCalignn">
                                                                <div class="form-group"><input
                                                                        aria-label="Relative Name Regional" type="text"
                                                                        id="regRelatName"  
                                                                        class="form-control" iconclass="iconclass"
                                                                        placeholder=" " autocomplete="one-time-code"
                                                                        value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12 partCalignn"><label
                                                                    class="input-label">Surname</label></div>
                                                            <div class="col-md-12 partCalignn">
                                                                <div class="form-group"><input type="text"
                                                                        name="applicantRelativeSurname"
                                                                        autocomplete="new-password" aria-label="Surname"
                                                                        placeholder="" maxlength="30"
                                                                        minlength="0" id="fNameSurname"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 partCalignn">
                                                                <div class="form-group"><input
                                                                        aria-label="Relative Surname Regional"
                                                                        type="text" id="regRelatSurName" 
                                                                        class="form-control" iconclass="iconclass"
                                                                        placeholder=" " autocomplete="one-time-code"
                                                                        value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="box">
                                            <div class="form-title">D. Contact Details</div>
                                            <div class="partCalign"><span class="textheadingnum" tabindex="0"
                                                    aria-label="Mobile Number">3. Mobile Number</span>
                                                <div class="row partDgap">
                                                    <div class="col-lg-3 ">
                                                        <div class="form-check library-checkbox"><input
                                                                class="library-checkbox" type="checkbox" name="self" id="self"
                                                                aria-checked="false" aria-label="Self"
                                                                value="Self"><label class="col-auto checkbox-label"
                                                                for="self">Self</label></div>
                                                    </div>
                                                    <div class="col-lg-8 mobilealign">
                                                        <div class="row">
                                                            <div class="form-check library-checkbox"><input
                                                                    class="library-checkbox" type="checkbox"  name="self1" id="self1"
                                                                    aria-checked=""
                                                                    aria-label="Relative mentioned above"
                                                                    value="Relative"><label
                                                                    class="col-md-auto checkbox-label"
                                                                    for="self">Relative mentioned above</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row p-2 ">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-md-12"><label
                                                                            class="input-label">Mobile Number of the
                                                                            above selected</label></div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group mobile-form-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">+91</div>
                                                                            </div><input type="text" name="PartDmobile"
                                                                                aria-label="Enter Mobile Number"
                                                                                placeholder=""  
                                                                                maxlength="10" minlength="0"
                                                                                class="library-input form-control"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div><button
                                                                            class="btn library-btn btn-primary send-otp"
                                                                            type="button"><i></i>&nbsp;Send
                                                                            OTP</button></div>
                                                                </div><span tabindex="0"
                                                                    style="font-size: 12px; opacity: 0.9; color: green; display: none;">OTP
                                                                    sent succesfully</span><span aria-label=""
                                                                    tabindex="-1"
                                                                    style="font-size: 12px; opacity: 0.9; display: none;">Please
                                                                    enter OTP received on your Mobile Number :0</span>
                                                                <div class="row">
                                                                    <div class="col-md-7">
                                                                        <div class="form-group"><input type="text"
                                                                                name="enterOTP"
                                                                                autocomplete="new-password"
                                                                                aria-label=""
                                                                                placeholder="Enter OTP received on Mobile"
                                                                                  maxlength="6" minlength="0"
                                                                                class="library-input form-control"
                                                                                value=""></div>
                                                                    </div>
                                                                    <div><button
                                                                            class="btn library-btn btn-primary send-otp"
                                                                            type="button"  
                                                                            aria-label="Verify Number"><i></i>&nbsp;Verify</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><span class="textheadingnum" tabindex="0" aria-label="Email Id">4.
                                                    Email Id</span>
                                                <div class="row partDgap">
                                                    <div class="col-lg-3">
                                                        <div class="form-check library-checkbox"><input
                                                                class="library-checkbox" type="checkbox" name="relation" id="relation"
                                                                aria-checked="false" aria-label="Self"
                                                                value="Self"><label class="col-md-auto checkbox-label"
                                                                for="emailid">Self</label></div>
                                                    </div>
                                                    <div class="col-lg-8 mobilealign">
                                                        <div class="row">
                                                            <div class="form-check library-checkbox"><input
                                                                    class="library-checkbox" type="checkbox" name="relation1" id="relation1"
                                                                    aria-label="Relative mentioned above"
                                                                    value="Relative"><label
                                                                    class="col-md-auto checkbox-label"
                                                                    for="emailid">Relative mentioned above</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label class="input-label">Email ID
                                                                    of the above selected</label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="relativeEmail" autocomplete="new-password"
                                                                        aria-label="Email ID of the above selected"
                                                                        placeholder="" maxlength="40"
                                                                        minlength="0" class="library-input form-control"
                                                                        value=""></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="box">
                                            <div class="form-title">E. Aadhaar Details</div>
                                            <div class="partCalign"><span class="textheadingnum" tabindex="0"
                                                    aria-label="5. Aadhaar Details">5. Aadhaar Details</span>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="aadhaarno" name="aadhaarno" aria-checked="false"
                                                                aria-label="Aadhaar Number" class="col-md-6" 
                                                                value="aadhaarnum"><label class="  radio-label" for=""
                                                                style="opacity: 1;">Aadhaar Number</label></div>
                                                    </div>
                                                    <div class="col-lg-8 noaadharalign">
                                                        <div class="row ">
                                                            <div class="library-radio" role="radiogroup"><input
                                                                    type="radio" id="aadhaarno1" name="aadhaarno1"
                                                                    aria-checked="false"
                                                                    aria-label="I am not able to furnish my Aadhaar Number because I don't have Aadhaar Number."
                                                                    class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                    value="noaadhaarnum"><label
                                                                    class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                    for="" style="opacity: 1;">I am not able to furnish
                                                                    my Aadhaar Number because I don't have Aadhaar
                                                                    Number.</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pr-0 pl-4" style="display: none;"></div>
                                                    <div class="col-md-12 pl-2" style="display: none;">
                                                        <div class="row p-2 "></div>
                                                    </div>
                                                    <div class="col-lg-4" style="display: none;">
                                                        <div class="row p-2">
                                                            <div class="col-md-12 partDaadhar"><label
                                                                    class="input-label">Aadhaar Number</label></div>
                                                            <div class="col-md-12 partDaadhar">
                                                                <div class="form-group"><input type="password"
                                                                        name="aadhaarNumber" autocomplete="new-password"
                                                                        aria-label="Aadhaar Number"
                                                                        placeholder="Enter Aadhaar number" 
                                                                        maxlength="12" minlength="0"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="box">
                                            <div class="form-title">F. Gender</div>
                                            <div class="partFalign"><span class="textheadingnum"
                                                    aria-label="Part 6. Gender" tabindex="0">6. Gender</span>
                                                <div class="row">
                                                    <div class="col-lg-2" style="text-transform: capitalize;">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="gender" name="gender" aria-checked="false"
                                                                aria-label="male"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                 value="M"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">male</label></div>
                                                    </div>
                                                    <div class="col-lg-2" style="text-transform: capitalize;">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="gender1" name="gender1" aria-checked="false"
                                                                aria-label="female"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                  value="F"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">female</label></div>
                                                    </div>
                                                    <div class="col-lg-8" style="text-transform: capitalize;">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="gender2" name="gender2" aria-checked="false"
                                                                aria-label="third gender"
                                                                class="col-md-auto col-lg-auto col-sm-1 col-1"
                                                                 value="T"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">third gender</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="box">
                                            <div class="form-title">G. Date of Birth details</div>
                                            <div class="col-lg-4">
                                                <div class="row p-2">7(a.)<div class="col-md-12 partGinput"><label
                                                            class="date-label">Date of Birth <b
                                                                class="text-danger">*</b></label></div>
                                                    <div class="col-md-12 partGinput"
                                                        aria-label="date field , Enter Date of Birth" tabindex="0">
                                                        <input type="date" name="date1" class="form-control library-date"
                                                            placeholder="Date"  tabindex="0" value=""
                                                            min="1899-01-13"></div>
                                                </div>
                                            </div><span class="partGalign textheadingnum">7(b.)Self attested copy of
                                                document supporting age proof attached</span>
                                            <div class="row partGpadding ">
                                                <div class="col-lg-5 ">
                                                    <div class="row p-2 ">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="ageDocument" name="ageDocument" aria-checked="false"
                                                                aria-label="Document for proof of Date of Birth"
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10 "
                                                                  value="ageProof"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Document for proof of Date of
                                                                Birth</label></div>
                                                        <div class="col-lg-12">
                                                            <div class="">
                                                                <div class="col"><label class="select-label"></label>
                                                                </div>
                                                                <div class="col-md-11 partGinputfield">
                                                                    <div><select class="form-select" name="ageproof"
                                                                            aria-label="">
                                                                            <option value="">Select Document</option>
                                                                            <option value="BCMR">Birth Certificate
                                                                                issued by Competent Local Body/Municipal
                                                                                Authority/Registrar of Births &amp;
                                                                                Deaths</option>
                                                                            <option value="ADHR">Aadhaar Card</option>
                                                                            <option value="PC">Pan Card</option>
                                                                            <option value="DL">Driving License</option>
                                                                            <option value="CCIS">Certificates of Class X
                                                                                or Class XII issued by CBSE/ICSE/ State
                                                                                Education Boards , if it contains Date
                                                                                of Birth</option>
                                                                            <option value="IPSP">Indian Passport
                                                                            </option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row p-2">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="ageDocument1" name="ageDocument1" aria-checked="false"
                                                                aria-label="Any other Document for proof of Date of Birth (If no document is available) (Pl. Specify)"
                                                                class="col-md-auto" 
                                                                value="otherAgeProof"><label
                                                                class="col-md-7 col-lg-7 col-sm-11 col-10  radio-label"
                                                                for="" style="opacity: 1;">Any other Document for proof
                                                                of Date of Birth (If no document is available) (Pl.
                                                                Specify)</label></div>
                                                    </div>
                                                    <div class="col-lg-8 paddingremove">
                                                        <div class="">
                                                            <div class="col-md-10 partGselectfield">
                                                                <div class="form-group"><input type="text"
                                                                        name="ageProofOthers"
                                                                        autocomplete="new-password" aria-label=""
                                                                        placeholder=""  maxlength="1000"
                                                                        minlength="0" class="library-input form-control"
                                                                        value=""></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 pr-2">
                                                <div class="row p-2">
                                                    <div class="col-md-12"><label class="upload-label" for="ageProof1">Proof of
                                                            Date of Birth (Document size maximum 2MB,.jpg,.png,.pdf) <b
                                                                class="text-danger">*</b></label></div>
                                                    <div class="col-md-12">
                                                        <div class="inputImageWrapper"><input type="file"
                                                                name="ageProof1"
                                                                aria-label="Proof of Date of Birth (Document size maximum 2MB,.jpg,.png,.pdf) "
                                                                class="form-control library-file-upload  "
                                                                accept=".jpeg, .jpg,.pdf,.png" id="ageProof1"
                                                                ></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="box">
                                            <div class="form-title">H. Present Address Details</div>
                                            <div class="partCalign"><span class="textheadingnum" tabindex="0"
                                                    aria-label=" Present Ordinary Residence (Full Address)">8(a.)
                                                    Present Ordinary Residence (Full Address)</span>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label class="input-label">
                                                                    House/Building/ Apartment No<b class="text-danger">
                                                                        *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="houseNo" autocomplete="new-password"
                                                                        aria-label=" House/Building/ Apartment No"
                                                                        placeholder=""  maxlength="40"
                                                                        minlength="0" id="doorD"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="House number Regional" type="text"
                                                                        id="regDoorD"  class="form-control"
                                                                        iconclass="iconclass" placeholder=" "
                                                                        autocomplete="one-time-code" value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label
                                                                    class="input-label">Street/Area/Locality/Mohalla/Road<b
                                                                        class="text-danger"> *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text" name="street"
                                                                        autocomplete="new-password"
                                                                        aria-label="Street/Area/Locality/Mohalla/Road"
                                                                        placeholder=""  maxlength="40"
                                                                        minlength="0" id="areasD"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="street Regional" type="text"
                                                                        id="regAreasD"   class="form-control"
                                                                        iconclass="iconclass" placeholder=" "
                                                                        autocomplete="one-time-code" value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label
                                                                    class="input-label">Village/Town<b
                                                                        class="text-danger"> *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="village" autocomplete="new-password"
                                                                        aria-label="Village/Town" placeholder=""
                                                                         maxlength="40" minlength="0"
                                                                        id="villageD" class="library-input form-control"
                                                                        value=""></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="village Regional" type="text"
                                                                        id="regVillageD" 
                                                                        class="form-control" iconclass="iconclass"
                                                                        placeholder=" " autocomplete="one-time-code"
                                                                        value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label class="input-label">Post
                                                                    Office<b class="text-danger"> *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="postOffice" autocomplete="new-password"
                                                                        aria-label="Post Office" placeholder=""
                                                                          maxlength="20" minlength="0"
                                                                        id="postH" class="library-input form-control"
                                                                        value=""></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="post office Regional" type="text"
                                                                        id="regPostH"  class="form-control"
                                                                        iconclass="iconclass" placeholder=" "
                                                                        autocomplete="one-time-code" value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label class="input-label">PIN Code<b
                                                                        class="text-danger"> *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="pinCode" autocomplete="new-password"
                                                                        aria-label="PIN Code" placeholder=""  
                                                                        maxlength="6" minlength="0"
                                                                        class="library-input form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label
                                                                    class="input-label">Tehsil/Taluqa/Mandal<b
                                                                        class="text-danger"> *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input type="text"
                                                                        name="currentAddressTeh"
                                                                        autocomplete="new-password"
                                                                        aria-label="Tehsil/Taluqa/Mandal" placeholder=""
                                                                         maxlength="30" minlength="0"
                                                                        id="areasH" class="library-input form-control"
                                                                        value=""></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><input
                                                                        aria-label="tehsil / taluqa Regional"
                                                                        type="text" id="regAreasH"  
                                                                        class="form-control" iconclass="iconclass"
                                                                        placeholder=" " autocomplete="one-time-code"
                                                                        value=""
                                                                        style="height: 40px; padding-right: 50px;"><i
                                                                        class="fa fa-keyboard-o"></i><i
                                                                        class="fa fa-keyboard-o" tabindex="0"
                                                                        aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col-md-12"><label
                                                                    class="select-label">District<b class="text-danger">
                                                                        *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div><select class="form-select" name="districtCd"
                                                                        aria-label="District" >
                                                                        <option value="">Select District</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row p-2">
                                                            <div class="col"><label class="select-label">State/UT<b
                                                                        class="text-danger"> *</b></label></div>
                                                            <div class="col-md-12">
                                                                <div><select class="form-select" name="currentStateCd"
                                                                        aria-label="State/UT" >
                                                                        <option value="">Select State</option>
                                                                        <option value="U01">Andaman &amp; Nicobar
                                                                            Islands</option>
                                                                        <option value="S01">Andhra Pradesh</option>
                                                                        <option value="S02">Arunachal Pradesh</option>
                                                                        <option value="S03">Assam</option>
                                                                        <option value="S04">Bihar</option>
                                                                        <option value="U02">Chandigarh</option>
                                                                        <option value="S26">Chhattisgarh</option>
                                                                        <option value="U03">Dadra &amp; Nagar Haveli and
                                                                            Daman &amp; Diu</option>
                                                                        <option value="S05">Goa</option>
                                                                        <option value="S06">Gujarat</option>
                                                                        <option value="S07">Haryana</option>
                                                                        <option value="S08">Himachal Pradesh</option>
                                                                        <option value="U08">Jammu and Kashmir</option>
                                                                        <option value="S27">Jharkhand</option>
                                                                        <option value="S10">Karnataka</option>
                                                                        <option value="S11">Kerala</option>
                                                                        <option value="U09">Ladakh</option>
                                                                        <option value="U06">Lakshadweep</option>
                                                                        <option value="S12">Madhya Pradesh</option>
                                                                        <option value="S13">Maharashtra</option>
                                                                        <option value="S14">Manipur</option>
                                                                        <option value="S15">Meghalaya</option>
                                                                        <option value="S16">Mizoram</option>
                                                                        <option value="S17">Nagaland</option>
                                                                        <option value="U05">NCT OF Delhi</option>
                                                                        <option value="S18">Odisha</option>
                                                                        <option value="U07">Puducherry</option>
                                                                        <option value="S19">Punjab</option>
                                                                        <option value="S20">Rajasthan</option>
                                                                        <option value="S21">Sikkim</option>
                                                                        <option value="S22">Tamil Nadu</option>
                                                                        <option value="S29">Telangana</option>
                                                                        <option value="S23">Tripura</option>
                                                                        <option value="S24">Uttar Pradesh</option>
                                                                        <option value="S28">Uttarakhand</option>
                                                                        <option value="S25">West Bengal</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="partCtext"><span class="textheadingnum">8(b.) Self-attested
                                                        copy of address proof either in the name of applicant or any one
                                                        of parents/spouse/adult child, if already enrolled as elector at
                                                        the same address (Attach anyone of them)</span></div>
                                                <div class="row partGpadding">
                                                    <div class="col-lg-5">
                                                        <div class="row p-2">
                                                            <div class="library-radio" role="radiogroup"><input
                                                                    type="radio" id="AddressProofDocument"
                                                                    name="AddressProofDocument" aria-checked="false"
                                                                    aria-label="Document for Proof of Residence"
                                                                    class="col-md-auto col-lg-auto col-sm-11 col-10"
                                                                     value="Y"><label
                                                                    class="col-md-auto col-lg-auto col-sm-11 col-10  radio-label"
                                                                    for="" style="opacity: 1;">Document for Proof of
                                                                    Residence</label></div>
                                                            <div class="col-lg-12">
                                                                <div class="">
                                                                    <div class="col"><label
                                                                            class="select-label"></label></div>
                                                                    <div class="col-md-11 partHinputoption">
                                                                        <div><select class="form-select"
                                                                                name="currentAddressProofType"
                                                                                aria-label="" >
                                                                                <option value="">Select Document
                                                                                </option>
                                                                                <option value="WEGB">
                                                                                    Water/Electricity/Gas connection
                                                                                    Bill for that address(atleast 1
                                                                                    year)</option>
                                                                                <option value="ADHR">Aadhaar Card
                                                                                </option>
                                                                                <option value="CPNS">Current passbook of
                                                                                    Nationalized/Scheduled Bank/Post
                                                                                    Office</option>
                                                                                <option value="IPSP">Indian Passport
                                                                                </option>
                                                                                <option value="RDLR">Revenue
                                                                                    Department's Land Owning records
                                                                                    including Kisan Bahi</option>
                                                                                <option value="RRLD">Registered Rent
                                                                                    Lease Deed(In case of tenant)
                                                                                </option>
                                                                                <option value="RSD">Registered Sale
                                                                                    Deed(In case of own house)</option>
                                                                            </select></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row p-2">
                                                            <div class="library-radio" role="radiogroup"><input
                                                                    type="radio" id="AddressProofDocument1"
                                                                    name="AddressProofDocument1" aria-checked="false"
                                                                    aria-label="Any other document for Proof of Residence (If no document is available) (Pl. Specify)"
                                                                    class="col-md-auto col-lg-auto col-sm-11 col-10"
                                                                     value="otherAddressProof"><label
                                                                    class="col-md-7 col-lg-7 col-sm-11 col-10  radio-label"
                                                                    for="" style="opacity: 1;">Any other document for
                                                                    Proof of Residence (If no document is available)
                                                                    (Pl. Specify)</label></div>
                                                        </div>
                                                        <div class="col-lg-8 paddingremove">
                                                            <div class="">
                                                                <div class="col-md-10 partGselectfield">
                                                                    <div class="form-group"><input type="text"
                                                                            name="addressProofOthers1"
                                                                            autocomplete="new-password" aria-label=""
                                                                            placeholder="" maxlength="1000"
                                                                            minlength="0"
                                                                            class="library-input form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 pr-2">
                                                <div class="row p-2">
                                                    <div class="col-md-12"><label class="upload-label" for="currentAddressProof">Proof of
                                                            Residence (Document size maximum 2MB,.jpg,.png,.pdf) <b
                                                                class="text-danger">*</b></label></div>
                                                    <div class="col-md-12">
                                                        <div class="inputImageWrapper"><input type="file"
                                                                name="currentAddressProof"
                                                                aria-label="Proof of Residence (Document size maximum 2MB,.jpg,.png,.pdf)"
                                                                class="form-control library-file-upload  "
                                                                accept=".jpeg, .jpg,.pdf" id="currentAddressProof"
                                                                ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="box">
                                            <div class="form-title">I. Category of Disability, if any (Optional)</div>
                                            <span class="textheadingnum" tabindex="0"
                                                aria-label="Part I. Category of Disability, if any (Optional)">9.
                                                Category</span>
                                            <div class="row partIalign">
                                                <div class="col-lg-3">
                                                    <div class="row p-2">
                                                        <div class="form-check library-checkbox"><input class="mr-2"
                                                                type="checkbox"  aria-checked="false"
                                                                aria-label="Locomotive"
                                                                value="disabilityTypeLocomotor"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-11 checkbox-label"
                                                                for="disability">Locomotive</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 paddingremove mediacheckalign">
                                                    <div class="row p-2">
                                                        <div class="form-check library-checkbox"><input class="mr-2"
                                                                type="checkbox" aria-checked="false"
                                                                aria-label="Visual" value="disabilityTypeVi"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-11 checkbox-label"
                                                                for="disability">Visual</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 partEcheckbox paddingremove mediacheckalign">
                                                    <div class="row p-2">
                                                        <div class="form-check library-checkbox"><input class="mr-2"
                                                                type="checkbox"   aria-checked="false"
                                                                aria-label="Deaf &amp; Dumb"
                                                                value="disabilityTypeSh"><label
                                                                class="col-md-auto col-lg-auto col-sm-11 col-11 checkbox-label"
                                                                for="disability">Deaf &amp; Dumb</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="alignlastcheck">
                                                        <div class="row p-2">
                                                            <div class="form-check library-checkbox"><input class="mr-3"
                                                                    type="checkbox"   aria-checked="false"
                                                                    aria-label="" value="disabilityTypeOthers"><label
                                                                    class="col-md-auto col-lg-auto col-sm-11 col-11 checkbox-label"
                                                                    for="disability"></label></div>
                                                        </div>
                                                        <div class="alignlastcheck1"><label
                                                                class="input-label">Other</label></div>
                                                        <div class="checkinput">
                                                            <div class="form-group"><input type="text" name="other"
                                                                    autocomplete="new-password" aria-label="Other"
                                                                    placeholder="Other Disability" 
                                                                    maxlength="1000" minlength="0"
                                                                    class="library-input form-control" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 partIpercent">
                                                    <div class="row p-2">
                                                        <div class="col-md-12 "><label class="input-label">Percentage of
                                                                disability</label></div>
                                                        <div class="col-md-8 percentmedia">
                                                            <div class="form-group"><input type="text" name="disability"
                                                                    autocomplete="new-password"
                                                                    aria-label="Percentage of disability" placeholder=""
                                                                      maxlength="3" minlength="0" iconclass=""
                                                                    class="library-input form-control" value=""></div>
                                                        </div>
                                                        <p class="percentsymbol">%</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 pr-2">
                                                <div class="row p-2"><span class="certificateheading"
                                                        aria-labelledby="F6I" id="F6I" tabindex="0">Certificate
                                                        Attached</span></div>
                                            </div>
                                            <div class="row partIalignradio">
                                                <div class="col-lg-3 ">
                                                    <div class="row p-2">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="disabilitychoose" name="disabilitychoose"
                                                                aria-checked="false" aria-label="Yes" class="col-md-7 "
                                                                 value="Y"><label
                                                                class="col-md-6  radio-label" for=""
                                                                style="opacity: 1;">Yes</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 ">
                                                    <div class="row p-2">
                                                        <div class="library-radio" role="radiogroup"><input type="radio"
                                                                id="disabilitychoose1" name="disabilitychoose1"
                                                                aria-checked="false" aria-label="No" class="col-md-7 "
                                                                  value="N"><label
                                                                class="col-md-7  radio-label" for=""
                                                                style="opacity: 1;">No</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 pr-2">
                                                <div class="row p-2">
                                                    <div class="col-md-12"><label  class="upload-label" for="disabilityProof">Disability
                                                            Certificate (Document size maximum 2MB,.jpg,.png,.pdf)
                                                        </label></div>
                                                    <div class="col-md-12">
                                                        <div class="inputImageWrapper"><input type="file"
                                                                name="disabilityProof"
                                                                aria-label="Disability Certificate (Document size maximum 2MB,.jpg,.png,.pdf)"
                                                                class="form-control library-file-upload  "
                                                                accept=".jpeg, .jpg,.pdf,.png" id="disabilityProof"
                                                                 ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="box">
                                            <div class="form-title">J. The details of my family member already included
                                                in the electoral roll at current address with whom I currently reside
                                                are as under</div><span class="textheadingnum">10. Family Member</span>
                                            <div class="row myrowform6">
                                                <div class="col-lg-4">
                                                    <div class="row p-2">
                                                        <div class="col-md-12"><label class="input-label">Name of Family
                                                                Member</label></div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><input type="text" name="name_of_family_mem"
                                                                    autocomplete="new-password"
                                                                    aria-label="Name of Family Member" placeholder=""
                                                                    maxlength="1000" minlength="0"
                                                                    class="library-input form-control" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row p-2">
                                                        <div class="col-md-12"><label class="select-label">Relationship
                                                                with applicant</label></div>
                                                        <div class="col-md-12">
                                                            <div><select class="form-select"
                                                                    name="currentRelRelationship"
                                                                    aria-label="Relationship with applicant"
                                                                     >
                                                                    <option value="">Select Relation</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row p-2">
                                                        <div class="col-md-12"><label class="input-label">His/Her EPIC
                                                                Number</label></div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><input type="text" name="f_mem_EPIC_no"
                                                                    autocomplete="new-password"
                                                                    aria-label="His/Her EPIC Number" placeholder=""
                                                                      maxlength="20" minlength="0"
                                                                    class="library-input form-control" value=""></div>
                                                        </div><span class="text-danger errormsg ml-4"> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="box">
                                            <div class="form-title">K. Declaration</div>
                                            <p class="boxparagraph_form6">I Hereby declare that to the best of My
                                                knowledge and belief.</p>
                                            <p class="boxparagraph_form6">(i) I am a citizen of India and place of my
                                                birth is</p>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col-md-12"><label class="input-label">Village/Town<b
                                                                    class="text-danger"> *</b></label></div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><input type="text" name="village"
                                                                    autocomplete="new-password"
                                                                    aria-label="Village/Town" placeholder=""  
                                                                    maxlength="25" minlength="0" id="village"
                                                                    class="library-input form-control" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col"><label class="select-label">State/UT<b
                                                                    class="text-danger"> *</b></label></div>
                                                        <div class="col-md-12">
                                                            <div><select class="form-select" name="stateCodeA"
                                                                    aria-label="State/UT" >
                                                                    <option value="">Select State</option>
                                                                    <option value="U01">Andaman &amp; Nicobar Islands
                                                                    </option>
                                                                    <option value="S01">Andhra Pradesh</option>
                                                                    <option value="S02">Arunachal Pradesh</option>
                                                                    <option value="S03">Assam</option>
                                                                    <option value="S04">Bihar</option>
                                                                    <option value="U02">Chandigarh</option>
                                                                    <option value="S26">Chhattisgarh</option>
                                                                    <option value="U03">Dadra &amp; Nagar Haveli and
                                                                        Daman &amp; Diu</option>
                                                                    <option value="S05">Goa</option>
                                                                    <option value="S06">Gujarat</option>
                                                                    <option value="S07">Haryana</option>
                                                                    <option value="S08">Himachal Pradesh</option>
                                                                    <option value="U08">Jammu and Kashmir</option>
                                                                    <option value="S27">Jharkhand</option>
                                                                    <option value="S10">Karnataka</option>
                                                                    <option value="S11">Kerala</option>
                                                                    <option value="U09">Ladakh</option>
                                                                    <option value="U06">Lakshadweep</option>
                                                                    <option value="S12">Madhya Pradesh</option>
                                                                    <option value="S13">Maharashtra</option>
                                                                    <option value="S14">Manipur</option>
                                                                    <option value="S15">Meghalaya</option>
                                                                    <option value="S16">Mizoram</option>
                                                                    <option value="S17">Nagaland</option>
                                                                    <option value="U05">NCT OF Delhi</option>
                                                                    <option value="S18">Odisha</option>
                                                                    <option value="U07">Puducherry</option>
                                                                    <option value="S19">Punjab</option>
                                                                    <option value="S20">Rajasthan</option>
                                                                    <option value="S21">Sikkim</option>
                                                                    <option value="S22">Tamil Nadu</option>
                                                                    <option value="S29">Telangana</option>
                                                                    <option value="S23">Tripura</option>
                                                                    <option value="S24">Uttar Pradesh</option>
                                                                    <option value="S28">Uttarakhand</option>
                                                                    <option value="S25">West Bengal</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col"><label class="select-label">District</label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div><select class="form-select" name="districtCdA"
                                                                    aria-label="District"  >
                                                                    <option>Select District</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <p class="calndralign">(ii) I am ordinarily a resident at the address
                                                    mentioned at Section 8(a) in Form 6 since<span
                                                        class="strtclr">*</span></p>
                                                <div class="col-md-3" tabindex="0"
                                                    aria-label="(ii) I am ordinarily a resident at the address mentioned at Section 8(a) in Form 6 since">
                                                    <div class="react-datepicker-wrapper">
                                                        <div class="react-datepicker__input-container"><span
                                                                role="alert" aria-live="polite"
                                                                class="react-datepicker__aria-live"></span><input
                                                                type="text" name="dob" placeholder="mm-yyyy"  
                                                                class="form-control" required="" value=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="boxparagraph_form6">(iii) I am applying for inclusion in Electoral
                                                Roll for the first time and my name is not included in any Assembly
                                                Constituency/Parliamentary Constituency.</p>
                                            <p class="boxparagraph_form6">(iv) I don’t possess any of the mentioned
                                                documents for proof of Date of Birth/Age. Therefore, I have enclosed,
                                                below mentioned document in support of age proof. (Leave blank, if not
                                                applicable).</p>
                                            <div class="col-lg-4">
                                                <div class="row p-2">
                                                    <div class="col-md-12 partLalign">
                                                        <div class="form-group"><input type="text"
                                                                name="declrBirthDocName" autocomplete="new-password"
                                                                aria-label="(iv) I don’t possess any of the mentioned documents for proof of Date of Birth/Age. Therefore, I have enclosed, below mentioned document in support of age proof. (Leave blank, if not applicable)."
                                                                placeholder=""   maxlength="1000"
                                                                minlength="0" class="library-input form-control"
                                                                value=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="boxparagraph_form6">(v) I am aware that making the above statement
                                                or declaration in relation to this application which is false and which
                                                I know or believe to be false or do not believe to be true, is
                                                punishable under Section 31 of Representation of the People Act,1950 (43
                                                of 1950) with imprisonment for a term which may extend to one year or
                                                with fine or with both.</p>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col"><label class="input-label">Place<b
                                                                    class="text-danger"> *</b></label></div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><input type="text" name="Place"
                                                                    autocomplete="new-password" aria-label="Place"
                                                                    placeholder=""  maxlength="1000"
                                                                    minlength="0" class="library-input form-control"
                                                                    value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <div class="col"><label class="date-label">Date </label></div>
                                                        <div class="col-md-12" aria-label="date field , Enter Date"
                                                            tabindex="0"><input type="date" name="date"
                                                                class="form-control library-date" placeholder="Date"
                                                                 tabindex="0" value="2024-01-13"></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="box">
                                            <div class="form-title">L. Captcha</div>
                                            <div class="row p-2">
                                                <div class="col-md-12 capctchaTextform6">
                                                    <div class="form-group" style="pointer-events: none; opacity: 0.4;">
                                                        <div class="form-group">
                                                            <div class="row ml-1">
                                                                <div class="col-md-auto mr-0 p-0 "><img
                                                                        src="data:image/jpg;base64,/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCABQAMgDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3miiigQUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRUNrd219bJc2lxFcQPnbLC4dWwcHBHB5BFAE1FFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAcl491y907TINL0eF5tY1Vmt7ZULBkXHzyAjoVyOSRjO7oprb0DRofD+g2elQHclvHtL8jex5ZsEnGWJOM8ZxXneieHLvx7rd14wvNRvdPtJGaPTRaS7JljUlM5+bYPvAgdWLHgddvR59c8M+M4PD+p38upaXqEcjadcTYaZGT52V2yCcAkZOc/LjHIHPGbcudrR6L+vM5YTblzyWj0X9ef+R1Os6/pXh+2E+q30VsjfdDHLPyAdqjJbGRnAOM1T0bxp4d1+5NtpuqRSzjpEytGzcE/KGALYAJOM471heGNOh17xV4h1/U44rme11BrC0R0LC3WEghlySASSDkAYIJH3iK0fHehWGoeHb7UZIvL1Cwt2uLa8h+SaNowXUBhzjOePfIwcEVzTa5lsXzza51axc8Zw6VceE72LW7mW205vL86aEZZf3i7cfK38WB0PWrMVxpfh210nSJb1Ii6raWizON8pVcD8eBzwMkDqQK5DxZfyap8ETfTs7TTWtq8rPGULP5ke44wOCckYGCORxiuj8aaFJr/AIbmgtWdL+3YXNm6MVZZk5XByME8rknjdntRzXbcV0X6g5NtyitbL9Toap2+qWV3qV7p8E2+6stn2iPaRs3jcvJGDkemaxLDxdHcfD1fFE0aKVtWkeNmEatKuVKgknAZxhep5HfimeAtEm0rQTd3651bU5DeXjsgVtzchSNoIwDyvZi2Krnu0l6l+0u0o9dSabx94Xt9Nt7+XV4lguM+UNjl2ALLnZjcBlGGSMcVZu/F2g2WiW2sz6gg0+5YJFMiM4ZiCcYUEg/Kc5HBGDzXP/CjSrC38FWWoxWkS3tx5vm3G3LsBIRjPUDCLwOOM9a7ulBzlFSdtSabqSipO2q/rqch/wALR8G/9Bj/AMlZv/iK6PS9Usta02LUNPm861lzsk2lc4JU8EA9Qa5DxDfzeLdeXwlpF1KllHu/tq7gUfu17QhycZYgggA/iA4rtbS1hsbOC0tk2QQRrFGmSdqqMAZPJ4FEJSbd9v68wpynKTvay/P72TUUUVqbBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHn2my6r8PpG0aTTNQ1jRDuksJ7G38yaLLZaORRgdSSG79vRLmj2mq+JfE8HiXVLeXTrKw8yPTbGVNszbhteSXPIyOi+w7DL9rRWSp20vojFUrWV9F0OEuLfWPBniLUdS03TJdU0XUpFnuLe3cma2lyA7qhJ37sk4A7AHaFGWalq3iDxhDJo2k6He6VZ3CiO7v9TiEbJG24MqRn7xIGMg9+dvDDvqKPZ9E9A9l0T07HG+N9Hkj+F9xo+mw3F00MNvDEiKXkdUdB0UcnAycCuyooq1FJ3NFBKV1/Vjy/U/C+rXfja40NIXXwvf3SardMgfbuAw8bPkcu4B2gnHysAMGvUKKKUIKN7dSYU1C7XU5X4cWlzY+AtMtru3lt5083dFMhRlzK5GQeRwQas+NNU1TSfDc0ujWdxdahIwihEMBl8snkuVHYAHHBGSuQRXQ0UKFocqY1C0ORPpY848Na9D4b0r7JH4Z8YXM0khnubmbTyWmlbG5zlzjOBx7c5OSe70vUP7U02K8+yXdp5mf3F3H5cq4JHzLk4zjI9iKuUUQi46XFCDjpfQKKKKs0CiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA//Z"
                                                                        alt="Captcha"
                                                                        style="border: 1px solid rgb(137, 137, 129);">
                                                                </div>
                                                                <div class="col-md-1 col-xl-1 col-lg-1 mt-3 "><img
                                                               
                                                                        aria-label="refrsh captcha" tabindex="0"
                                                                        alt="refrsh captcha" class="ml-2"
                                                                        style="cursor: pointer; height: 18px;"><img
                                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACPUlEQVR4nO2ZPWgUQRTHfyKaXDgxlYXkrsnFTtFoIyadxUm0Fyy0ESsljaYTY7qUokjAj1pQtLNRU2jtRydeQJJGtDgR9OK3MrALf4bMZJfZOzPn/mCb99699/7L3uybWSgpKSn5H2gAj4FPwBOgTkTsAd4Bf+QyYqLgINC2mjfXdyLgMPBZmv5oidjQHANWpdn3wN5YBJwEfkijy8CuxJdHwG7gOLCVHnIO+C1NvgZq4s8qYCfQSeJu0iMuWg0+B3ZYMVkFjErcL2C8i32zDbhiNfcUGF4jNs8jdFdiF/M2VQFmgSXg5xrLoO96CAw58uYR0AC+SfyBPM0/y9l0et1Z50/nElAFrgNXk/optyT+WlYBszmbNnfpJXAa2LRObpeAs2KfE/sh6z0ymEXAkvzoPLCF4nAJmBL7B2AgsZsb8kZ8k1mK6DNf9BrsErAZeCu+I+JbEPtMSJEi8OWeF59Z1VJOif1BaJFQfLmb1jKcsk/sL0KLhOLLPSI+M36n1MS+ElokFF/uAfF9FXtF7J3QIqH4clccjQ6J/UtokVB8uWuxP0LN2P/E8xmW0fuxv8gu5B0lZgoW4RJw1DNKtMQ3kaXIJcfQ5hvmXgFnAoa5abFfFvuE2NsibMON09uTreOCNU7flngzamdmMNkitv7hhmbM2tDsp0tUu7SlvNfrk7wiN/Vj1qbevAuiOlapJ/OQibtBpAdb48CJXh9s9cXRYl8c7vbF8brvA8cjImM0abod4yemkpKSEpz8BYvNmvdM2SAEAAAAAElFTkSuQmCC"
                                                                        aria-label="Read aloud captcha"
                                                                        alt="Read aloud captcha" tabindex="0"
                                                                        class="ml-2 mt-1"
                                                                        style="cursor: pointer; height: 18px;"></div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12"><label>Captcha <span
                                                                            style="color: red;">*</span></label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="undefined pl-3">
                                                                    <div class="form-group"><input type="text"
                                                                            name="captcha" autocomplete="new-password"
                                                                            aria-label="" placeholder="Enter Captcha"
                                                                            maxlength="6" minlength="0"
                                                                            class="library-input form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div><video hidden="" id="hls-video" controls=""
                                                                    name="media">
                                                                    <source id="change-src"
                                                                        src="https://gateway-voters.eci.gov.in/api/v1/captcha-service/generateVoiceCaptcha/669D277D77F386DF55A6151B235A03B0"
                                                                        type="audio/wav">
                                                                </video></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="">
                                            <div class="lastsubmitbuttons">
                                                <div class="p-1">
                                                    <button class="btn library-btn outline-none cancel-btn" type="button"><i></i>&nbsp;Submit</button></div>
                                               
                                                <div class=""><button class="btn library-btn outline-none cancel-btn"
                                                        type="button"><i></i>&nbsp;Cancel</button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert_global" style=""></div>
            </div>
        </div>
    </div>
    
</form>
</body>

</html>