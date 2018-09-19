module Jekyll
    class QaQuestion < Liquid::Block
        def initialize(tag_name, text, tokens)
            super
        end

        def render(context)
            "<div class='row justify-content-start'><div class='qa question col-11 alert alert-primary'>
                <i class='fas fa-question-circle'></i> <h2>#{Kramdown::Document.new(super).to_html}</h2>
            </div></div>"
        end
    end

    class QaAnswer < Liquid::Block
        def initialize(tag_name, text, tokens)
            super
        end

        def render(context)
            "<div class='row justify-content-end'>
                <div class='qa answer col-11 alert alert-success'>
                    <span>#{Kramdown::Document.new(super).to_html}</span>
                    <i class='fas fa-exclamation-circle'></i>
                </div>
            </div>"
        end
    end

    class BsWarn < Liquid::Block
        def initialize(tag_name, text, tokens)
            super
        end
        
        def render(context)
            "<div class='row justify-content-end'>
                <div class='qa answer col-11 alert alert-warning'>
                    <span>#{Kramdown::Document.new(super).to_html}</span>
                    <i class='fas fa-exclamation-triangle'></i>
                </div>
            </div>"
        end
    end

    class WrapLink < Liquid::Tag
        def initialize(tag_name, text, tokens)
            super
            @text = text
        end

        def render(context)
            "<a href='#{@text}'>#{@text}</a>"
        end
    end

    class Fancybox < Liquid::Tag
        def initialize(tag_name, text, tokens)
            super
            @text = text
        end

        def render(context)
          "<a data-fancybox='gallery' href='#{@text}'>
              <img src='#{@text}'>
            </a>"
        end
    end
end

Liquid::Template.register_tag('answer', Jekyll::QaAnswer)
Liquid::Template.register_tag('question', Jekyll::QaQuestion)
Liquid::Template.register_tag('Fancybox', Jekyll::Fancybox)
Liquid::Template.register_tag('link', Jekyll::WrapLink)
Liquid::Template.register_tag('BsWarn', Jekyll::BsWarn)
