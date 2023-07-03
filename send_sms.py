import africastalking

# TODO: Initialize Africa's Talking

africastalking.initialize(
    username='spaceity',
    api_key='72a50b8c2b10d5680d33786c9ca934784f863ebf84190441cefbc91c9b6ad2bc'
)

sms = africastalking.SMS

class send_sms():

    def send(self):
        
        #TODO: Send message

        def sending(self):
            # Set the numbers in international format
            recipients = "+254115151539"
            # Set your message
            message = "Hey AT Ninja!"
            # Set your shortCode or senderId
            # sender = "XXYYZZ"
            try:
                response = self.sms.send(message, recipients, sender)
                print (response)
            except Exception as e:
                print (f'Houston, we have a problem: {e}')


    