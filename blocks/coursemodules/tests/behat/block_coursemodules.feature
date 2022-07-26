@block @block_coursemodules block
Feature: Block Course Modules
  In order to overview course  modules in a course
  As a manager
  I can add activities block in a course

  Scenario: Add Course Modules block in a course
    Given the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1        | topics |
    And the following "activities" exist:
      | activity   | name                   | intro                         | course | idnumber    |
      | assign     | Test assignment name   | Test assignment description   | C1     | assign1     |
      | book       | Test book name         | Test book description         | C1     | book1       |
      | chat       | Test chat name         | Test chat description         | C1     | chat1       |
      | choice     | Test choice name       | Test choice description       | C1     | choice1     |
      | data       | Test database name     | Test database description     | C1     | data1       |
      | feedback   | Test feedback name     | Test feedback description     | C1     | feedback1   |
      | folder     | Test folder name       | Test folder description       | C1     | folder1     |
      | forum      | Test forum name        | Test forum description        | C1     | forum1      |
      | glossary   | Test glossary name     | Test glossary description     | C1     | glossary1   |
      | imscp      | Test imscp name        | Test imscp description        | C1     | imscp1      |
      | label      | Test label name        | Test label description        | C1     | label1      |
      | lesson     | Test lesson name       | Test lesson description       | C1     | lesson1     |
      | lti        | Test lti name          | Test lti description          | C1     | lti1        |
      | page       | Test page name         | Test page description         | C1     | page1       |
      | quiz       | Test quiz name         | Test quiz description         | C1     | quiz1       |
      | resource   | Test resource name     | Test resource description     | C1     | resource1   |
      | scorm      | Test scorm name        | Test scorm description        | C1     | scorm1      |
      | survey     | Test survey name       | Test survey description       | C1     | survey1     |
      | url        | Test url name          | Test url description          | C1     | url1        |
      | wiki       | Test wiki name         | Test wiki description         | C1     | wiki1       |
      | workshop   | Test workshop name     | Test workshop description     | C1     | workshop1   |

    When I log in as "admin"
    And I am on "Course 1" course homepage with editing mode on
    And I add the "Course Modules" block
    And I click on "Assignments" "link" in the "Course Modules" "block"
    Then I should see "Test assignment name"
    And I am on "Course 1" course homepage
    And I click on "Chats" "link" in the "Course Modules" "block"
    And I should see "Test chat name"
    And I am on "Course 1" course homepage
    And I click on "Choices" "link" in the "Course Modules" "block"
    And I should see "Test choice name"
    And I am on "Course 1" course homepage
    And I click on "Databases" "link" in the "Course Modules" "block"
    And I should see "Test database name"
    And I am on "Course 1" course homepage
    And I click on "Feedback" "link" in the "Course Modules" "block"
    And I should see "Test feedback name"
    And I am on "Course 1" course homepage
    And I click on "Forums" "link" in the "Course Modules" "block"
    And I should see "Test forum name"
    And I am on "Course 1" course homepage
    And I click on "External tools" "link" in the "Course Modules" "block"
    And I should see "Test lti name"
    And I am on "Course 1" course homepage
    And I click on "Quizzes" "link" in the "Course Modules" "block"
    And I should see "Test quiz name"
    And I am on "Course 1" course homepage
    And I click on "Glossaries" "link" in the "Course Modules" "block"
    And I should see "Test glossary name"
    And I am on "Course 1" course homepage
    And I click on "SCORM packages" "link" in the "Course Modules" "block"
    And I should see "Test scorm name"
    And I am on "Course 1" course homepage
    And I click on "Lessons" "link" in the "Course Modules" "block"
    And I should see "Test lesson name"
    And I am on "Course 1" course homepage
    And I click on "Wikis" "link" in the "Course Modules" "block"
    And I should see "Test wiki name"
    And I am on "Course 1" course homepage
    And I click on "Workshop" "link" in the "Course Modules" "block"
    And I should see "Test workshop name"
    And I am on "Course 1" course homepage
    And I click on "Resources" "link" in the "Course Modules" "block"
    And I should see "Test book name"
    And I should see "Test page name"
    And I should see "Test resource name"
    And I should see "Test imscp name"
    And I should see "Test folder name"
    And I should see "Test url name"
