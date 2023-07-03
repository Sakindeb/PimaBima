import os
from flask import Flask, request
from send_sms import send_sms

import africastalking

# TODO: Initialize Africa's Talking

africastalking.initialize(
    username='spaceity',
    api_key='72a50b8c2b10d5680d33786c9ca934784f863ebf84190441cefbc91c9b6ad2bc'
)

sms = africastalking.SMS


app = Flask(__name__)

#TODO: create incoming messages route

#TODO: create delivery reports route.

if __name__ == "__main__":
    recipients = "+254115151539"
    # Set your message
    message = "Hey AT Ninja!"
    response = self.sms.send(message, recipients)
    app.run(debug=True, port = os.environ.get("PORT"))

