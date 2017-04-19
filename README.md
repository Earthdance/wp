# :punch: Earthdance - dev notes


## Todo project setup
- [x] Migrate site to WPEngine
- [x] Setup git in WPEngine
- [x] Codeship
- [x] Gulp

## CSS Todo
```CSS
/*https://hackernoon.com/a-guide-to-cross-browser-testing-installing-all-the-things-6e56c2bd8182#.rce2y7da6*/
/* the page should not change width as content is loaded */
body {
  overflow-y: scroll;
}

/* block scrolling without losing the scroll bar and shifting the page */
/* add this class when a modal is open */
body.block-scroll {
  overflow: hidden;
  overflow-y: scroll !important;
  position: fixed;
  width: 100%;
}
```

## WP
- [ ] 404 page
- [ ] Style login page logo
- [ ] Revisit WYSIWYG editor spacing
- [ ] Set up Social Media Links
- [ ] add post sorting plugin

## Todo pre-launch
- [ ] Uptime install
- [ ] Add Google Analytics
- [ ] Add Google Webmaster tools
- [ ] Huge SEO Issue: You're blocking access to robots.
- [ ] SEO titles set up
- [ ] Add xml sitemap and add it to WebmasterTools

## Technical Overview

Framework:
- WP

Environments:

- Local earthdance.dev
- :construction: [Staging](http://earthdance.staging.wpengine.com) earthdance.staging.wpengine.com
- :ship: [Live/Procudtion](http://www.earthdanceforms.com) earthdanceforms.com
Continuous Deployment: CodeShip

Host:

- WPEngine

---
## Spin up

You must have these installed first:

1. [Node](https://nodejs.org/)
1. [WP-CLI](http://wp-cli.org/)

**If you have Node and WPCLI installed, Run these commands in order:**

1. `cd` to the directory of your liking
1. Jump into GitHub to clone the WP project
1. Run `npm i` (this will install all node dependencies)

1. When this is done, run `gulp`
1. Crank it!

---

## WorkFlow from LOCAL to STAGING
1. Create a new branch off the `dev` branch.
1. When you are done with this feature, submit a "Pull Request" into dev
1. When the Pull Request is approved and merged into `dev`, the staging site will be updated by CodeShip automagically

## :ship: WorkFlow from STAGING to PRODUCTION
1. Login to the live site.
1. Click on WPEngine at the top left of the Admin panel
1. Click on Staging tab
1. Click the button that says "Copy from STAGING to LIVE"
1. Leave "Move No Tables" selected, unless you need DB tables to move.
1. Enter your email address to be notified of the deployment
1. Click Submit


---

### :poop: Clean up
1. Delete your local and remote support ticket branch when done. Avoid leaving stale branches.
1. Local branch removal: run `git branch -d supportBanchName`
1. Remote branch removal: run `git push origin --supportBanchName`
*You can also do this using [SourceTree](http://www.sourcetreeapp.com/) also*


---
### Support contract


### Responsive Sizes


### Screen Size Optimization & Quality Assurance


### Browser Support


---

## General Development Info


---
## :mailbox: Contacts

### :smiley: Developer(s)
- Ben Gandhi-Shepard
- Michael Shepard



---
## Passwords


---
## Known issues


---
## Notes
