# UTA_HACKTHON

Disaster Relief Communication Web App


Inspiration:
  In Disaster hit area, sometimes people are not able to communicate because of no electricity or cellular network. So in such cases, unmanned drone travels in those areas and identifies people through machine vision and sends data back to control center. Control center has a list of authorities and community volunteers, so it finds the nearest help.

What it does:
  The system takes images from a drone and it passes to the machine learning classification model and checks whether any humans in need are found in those images. If anyone is found, the drone sends its gps location to the server.

  The web app here is a communication medium between the help-seeker who needs help and the volunteer who is able to do some good.

  The web app is very light in size, loads up really fast so as it could be accessed in a really bad reception area. The volunteers and the help-seeker can post their contribution and the server side will match them(if they are nearby accessed via geolocation from a browser) and then sends the text message to the individuals.

Accomplishments that we're proud of:
  Successfully trained model which identifies people with accuracy of 95%

What we learned:
  We learned computer vision, Machine learning APIs and How difficult is to get training data for Machine learning task.

Built With google-maps, image-processing, machine-learning, vize.ai-api, php, sql, neural-network
