workflow "Deployment" {
  on = "push"
  resolves = ["actions/bin/curl@master"]
}

action "Filters for GitHub Actions" {
  uses = "actions/bin/filter@712ea355b0921dd7aea27d81e247c48d0db24ee4"
  args = "branch master"
}

action "actions/bin/curl@master" {
  uses = "actions/bin/curl@master"
  needs = ["Filters for GitHub Actions"]
  args = "--request POST --header \"PRIVATE-TOKEN: $GITLAB_TOKEN\" $TRIGGER_URL"
  secrets = ["TRIGGER_URL", "GITLAB_TOKEN"]
}
