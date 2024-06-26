@core @core_course @_cross_browser
Feature: Show/hide course sections
  In order to delay sections availability
  As a teacher
  I need to show or hide sections

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
      | student1 | Student | 1 | student1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format | hiddensections |
      | Course 1 | C1 | topics | 0                     |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage with editing mode on
    And I add a "Forum" to section "1" and I fill the form with:
      | Forum name | Test hidden forum 11 name |
      | Description | Test hidden forum 11 description |
      | Availability | Hide from students |
    And I add a "Forum" to section "1" and I fill the form with:
      | Forum name | Test hidden forum 12 name |
      | Description | Test hidden forum 12 description |
      | Availability | Show on course page |
    And I add a "Forum" to section "2" and I fill the form with:
      | Forum name | Test hidden forum 21 name |
      | Description | Test hidden forum 21 description |
      | Availability | Hide from students |
    And I add a "Forum" to section "2" and I fill the form with:
      | Forum name | Test hidden forum 22 name |
      | Description | Test hidden forum 22 description |
      | Availability | Show on course page |
    And I add a "Forum" to section "3" and I fill the form with:
      | Forum name | Test hidden forum 31 name |
      | Description | Test hidden forum 31 description |
      | Availability | Hide from students |
    And I add a "Forum" to section "3" and I fill the form with:
      | Forum name | Test hidden forum 32 name |
      | Description | Test hidden forum 32 description |
      | Availability | Show on course page |

  @javascript
  Scenario: Show / hide section icon functions correctly
    Given I am on "Course 1" course homepage
    When I hide section "1"
    Then section "1" should be hidden
    And section "2" should be visible
    And section "3" should be visible
    And I hide section "2"
    And section "2" should be hidden
    And I show section "2"
    And section "2" should be visible
    And I hide section "3"
    And I show section "3"
    And I hide section "3"
    And section "3" should be hidden
    And I reload the page
    And section "1" should be hidden
    And all activities in section "1" should be hidden
    And section "2" should be visible
    And section "3" should be hidden
    And all activities in section "1" should be hidden
    And I log out
    And I log in as "student1"
    And I am on "Course 1" course homepage
    And section "1" should be hidden
    And all activities in section "1" should be hidden
    And section "2" should be visible
    And section "3" should be hidden
    And all activities in section "1" should be hidden

  @javascript
  Scenario: Students can not navigate to hidden sections
    Given I am on "Course 1" course homepage
    And I hide section "2"
    Given I navigate to "Settings" in current page administration
    And I set the following fields to these values:
      | Course layout | Show one section per page |
    And I press "Save and display"
    When I click on "Topic 1" "link" in the "region-main" "region"
    Then I should see "Topic 2" in the "region-main" "region"
    And I click on "Topic 2" "link" in the "region-main" "region"
    And I should see "Topic 1" in the "region-main" "region"
    And I should see "Topic 3" in the "region-main" "region"
    And I log out
    And I log in as "student1"
    And I am on "Course 1" course homepage
    And I click on "Topic 1" "link" in the "region-main" "region"
    And I should not see "Topic 2" in the "region-main" "region"
    And I should see "Topic 3" in the "region-main" "region"
    And I click on "Topic 3" "link" in the "region-main" "region"
    And I should not see "Topic 2" in the "region-main" "region"
    And I should see "Topic 1" in the "region-main" "region"

  @javascript
  Scenario: Students can not navigate to restricted sections
    Given I am on "Course 1" course homepage
    Given I navigate to "Settings" in current page administration
    And I set the following fields to these values:
      | Course layout | Show one section per page |
      | Enable completion tracking | Yes |
    And I press "Save and display"
    And the following "activities" exist:
      | activity | course | section | name       | completion |
      | label    | C1     | 1       | Test label | 1          |
    And I edit the section "2"
    And I expand all fieldsets
    And I click on "Add restriction..." "button"
    And I click on "Activity completion" "button" in the "Add restriction..." "dialogue"
    And I set the following fields to these values:
      | cm | Test label |
      | Required completion status | must be marked complete |
    And I press "Save changes"
    When I click on "Topic 1" "link" in the "region-main" "region"
    Then I should see "Topic 2" in the "region-main" "region"
    And I click on "Topic 2" "link" in the "region-main" "region"
    And I should see "Topic 1" in the "region-main" "region"
    And I should see "Topic 3" in the "region-main" "region"
    And I log out
    And I log in as "student1"
    And I am on "Course 1" course homepage
    And I click on "Topic 1" "link" in the "region-main" "region"
    And I should not see "Topic 2" in the "region-main" "region"
    And I should see "Topic 3" in the "region-main" "region"
    And I click on "Topic 3" "link" in the "region-main" "region"
    And I should not see "Topic 2" in the "region-main" "region"
    And I should see "Topic 1" in the "region-main" "region"
