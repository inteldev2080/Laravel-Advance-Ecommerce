This software is licensed under the MIT agreement. Please see license.txt for any additional requests.

Update 2.4.0
    - Issue reported in IE (specifically 11) that the iframe mode is printing the whole page.
        * After some investigation the demo seemed to break when the external css was not completely loaded from the external site in the iframe.

    - Notes:
        * Minor version increased.
        * Added jquery ui dialog to demo (jquery-ui-1.10.4)
        * Demo is using jquery-1.10.2

Update 2.3.3

    - Issue reported that when using Chrome, css not being applied correctly. Added delay to allow css to be applied correctly to print document.
        Thanks jer-gallagher-oe for supplying the fix!

Update 2.3.2

    - Fixed bug in IE8 browsers and jquery 1.7 (as reported in issues). Switch from for-in to for-each.

Update 2.3.1

    - Important Changes:
        * In this version, the document standard is no longer set by the option 'strict'.
            To accomodate different standards, you can specify one of [strict, loose, html5] as the new 'standard' option.
        * HTML5 is the default standard for the doc type.

    - Notes:
        * For <link> elements, you MUST include the 'rel' attribute with a value of 'stylesheet'. Otherwise the stylesheet will not be included in the printed element.
        * New option : 'extraHead' this is a comma delimited string of additional elements that is added to the head of the printed document.
            An example of this might be: '<meta charset="utf-8" />,<meta http-equiv="X-UA-Compatible" content="IE=edge"/>'
