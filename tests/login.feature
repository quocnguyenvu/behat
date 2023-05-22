Feature: Login
  In order to access protected features
  As a registered user
  I want to be able to log in to my account

  Scenario: Successful login
    Given I am on the login page
    When I fill in "email" with "behat@st.vn"
    And I fill in "password" with "abc@123"
    And I press "Login"
    Then I should see "Welcome, Nhat Dep Trai"